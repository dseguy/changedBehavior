#!/usr/bin/env php
<?php

/**
 * Extracts the same "first sentence" that script/make.php derives for each
 * docs/*.ini entry's meta description / JSON-LD description / llms.txt
 * line, and prints it as "<file>:<first sentence>" for manual review
 * (catches cases like "Until PHP 8.1, ..." getting cut to "Until PHP 8.").
 *
 * Run from the repo root:
 *
 *   php script/first_sentences.php
 */

// Kept in sync by hand with the same-named logic in script/make.php.
function rst_inline_to_md(string $s) : string {
    $s = preg_replace('/`([^`<]+)\s*<([^>]+)>`_/', '[$1]($2)', $s);
    $s = preg_replace('/``([^`]+)``/', '`$1`', $s);
    return $s;
}

$files = glob('docs/*.ini');
$files = array_diff($files, ['docs/skeleton.ini']);
sort($files);

foreach ($files as $file) {
    $tip = parse_ini_file($file);

    if ($tip === false || !isset($tip['title'])) {
        fwrite(STDERR, basename($file).": skipped, not valid INI or missing title\n");
        continue;
    }

    $title = rst_inline_to_md($tip['title']);
    $description = rst_inline_to_md($tip['description'] ?? '');
    $description = str_replace("\n", "\n\n", $description);

    $firstSentence = trim(preg_split('/[.?;\n]/', $description)[0] ?? $title).'.';

    echo basename($file).':'.$firstSentence."\n";
}
