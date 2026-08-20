#!/usr/bin/env python3
"""Populate <meta name="description"> from each page's ld+json description."""

import argparse
import html
import json
import pathlib
import re
import sys

SKIP = {"404.html", "print.html"}

LD_JSON_RE = re.compile(
    r'<script[^>]*\btype\s*=\s*["\']application/ld\+json["\'][^>]*>(.*?)</script>',
    re.IGNORECASE | re.DOTALL,
)
META_DESC_RE = re.compile(
    r'<meta\b(?=[^>]*\bname\s*=\s*["\']description["\'])[^>]*>',
    re.IGNORECASE,
)
CONTENT_RE = re.compile(
    r'\bcontent\s*=\s*(?:"([^"]*)"|\'([^\']*)\'|([^\s>]*))',
    re.IGNORECASE,
)
HEAD_END_RE = re.compile(r'</head\s*>', re.IGNORECASE)


def iter_nodes(data):
    if isinstance(data, dict):
        yield data
        for key in ("@graph", "mainEntity", "itemListElement", "hasPart"):
            if key in data:
                yield from iter_nodes(data[key])
    elif isinstance(data, list):
        for item in data:
            yield from iter_nodes(item)


def as_text(value):
    if isinstance(value, str):
        return value
    if isinstance(value, dict):
        return as_text(value.get("@value"))
    if isinstance(value, list):
        for item in value:
            text = as_text(item)
            if text:
                return text
    return None


def extract_description(source):
    for match in LD_JSON_RE.finditer(source):
        raw = match.group(1).strip()
        if not raw:
            continue
        try:
            data = json.loads(raw)
        except json.JSONDecodeError as exc:
            print(f"  warning: unparseable ld+json ({exc})", file=sys.stderr)
            continue
        for node in iter_nodes(data):
            text = as_text(node.get("description"))
            if text and text.strip():
                return text
    return None


def normalise(text, max_length):
    text = html.unescape(text)
    text = text.replace("`", "")
    text = " ".join(text.split())
    if max_length and len(text) > max_length:
        cut = text[: max_length - 1]
        space = cut.rfind(" ")
        if space > max_length * 0.6:
            cut = cut[:space]
        text = cut.rstrip(" ,;:.-") + "…"
    return text


def process(path, root, max_length, keep_existing, dry_run):
    text = path.read_text(encoding="utf-8")
    rel = path.relative_to(root).as_posix()

    description = extract_description(text)
    if description is None:
        return False, f"{rel}: no ld+json description"

    description = normalise(description, max_length)
    tag = f'<meta name="description" content="{html.escape(description, quote=True)}">'

    existing = META_DESC_RE.search(text)
    if existing:
        current = CONTENT_RE.search(existing.group(0))
        has_content = bool(current and next((g for g in current.groups() if g is not None), '').strip())
        if keep_existing and has_content:
            return False, f"{rel}: kept existing description"
        updated = text[: existing.start()] + tag + text[existing.end():]
    else:
        head_end = HEAD_END_RE.search(text)
        if not head_end:
            return False, f"{rel}: no </head>"
        updated = text[: head_end.start()] + f"    {tag}\n" + text[head_end.start():]

    if updated == text:
        return False, f"{rel}: already up to date"
    if not dry_run:
        path.write_text(updated, encoding="utf-8")
    return True, f"{rel}: {description[:70]}"


def main():
    parser = argparse.ArgumentParser(description=__doc__)
    parser.add_argument("root", nargs="?", default="book", type=pathlib.Path)
    parser.add_argument("--max-length", type=int, default=160)
    parser.add_argument("--keep-existing", action="store_true")
    parser.add_argument("--dry-run", action="store_true")
    parser.add_argument("-v", "--verbose", action="store_true")
    args = parser.parse_args()

    if not args.root.is_dir():
        sys.exit(f"error: {args.root} is not a directory")

    changed = 0
    for path in sorted(args.root.rglob("*.html")):
        if path.relative_to(args.root).as_posix() in SKIP:
            continue
        did, message = process(path, args.root, args.max_length,
                               args.keep_existing, args.dry_run)
        changed += did
        if did or args.verbose:
            print(("  " if did else "  skip ") + message)

    print(f"{changed} file(s) {'would be ' if args.dry_run else ''}updated")


if __name__ == "__main__":
    main()
