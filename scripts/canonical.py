#!/usr/bin/env python3
"""Set <link rel="canonical"> and fix <meta property="og:url"> per page.

mdBook's `{{ path }}` template var (used in theme/head.hbs for og:url)
resolves to the Markdown source path (e.g. "behavior/foo.md"), not the
rendered HTML path, so og:url ends up pointing at a .md file that doesn't
exist on the served site. This script computes the real URL once per page
and uses it for both tags.
"""
import pathlib, re, sys

BASE = "https://php-changed-behaviors.readthedocs.io/en/latest/"
SKIP = {"404.html", "print.html"}
root = pathlib.Path(sys.argv[1] if len(sys.argv) > 1 else "book")

for html in root.rglob("*.html"):
    rel = html.relative_to(root).as_posix()
    if rel in SKIP:
        continue
    if rel == "index.html" or rel.endswith("/index.html"):
        rel = rel[: -len("index.html")]
    url = f"{BASE}{rel}"
    text = html.read_text(encoding="utf-8")

    canonical_tag = f'<link rel="canonical" href="{url}">'
    if 'rel="canonical"' in text:
        text = re.sub(r'<link rel="canonical"[^>]*>', canonical_tag, text, count=1)
    else:
        text = text.replace("</head>", f"    {canonical_tag}\n</head>", 1)

    text = re.sub(
        r'(<meta property="og:url" content=")[^"]*(">)',
        rf'\g<1>{url}\g<2>',
        text,
        count=1,
    )

    html.write_text(text, encoding="utf-8")
