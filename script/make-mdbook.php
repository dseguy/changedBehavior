<?php

/**
 * Prototype generator: reads docs/*.ini (same source as script/make.php)
 * and emits an mdBook-compatible src/ tree instead of Sphinx RST.
 *
 * Output goes to mdbook-proto/src/ so it never touches the live Sphinx
 * build. Run from the repo root:
 *
 *   php script/make-mdbook.php
 *   mdbook build mdbook-proto
 */

$outDir = 'mdbook-proto/src';

if (!file_exists($outDir.'/behavior')) {
    mkdir($outDir.'/behavior', 0755, true);
}

$buildLog = fopen('mdbook-proto/build.log', 'w+');

function buildlog(string $message) : void {
    global $buildLog;
    fwrite($buildLog, $message.PHP_EOL);
}

// Convert the RST inline markup that lives inside the .ini text fields
// (``code``, `text <url>`_) to Markdown, since the source data was
// authored assuming an RST renderer.
function rst_inline_to_md(string $s) : string {
    // `text <url>`_  ->  [text](url)
    $s = preg_replace('/`([^`<]+)\s*<([^>]+)>`_/', '[$1]($2)', $s);
    // ``text``  ->  `text`
    $s = preg_replace('/``([^`]+)``/', '`$1`', $s);
    return $s;
}

function md_code_block(string $lang, string $content) : string {
    return "```$lang\n".rtrim($content, "\n")."\n```";
}

$files = glob('docs/*.ini');
$files = array_diff($files, ['docs/skeleton.ini']);

$tips = [];
$errors = 0;

foreach ($files as $file) {
    $tip = parse_ini_file($file);

    if ($tip === false) {
        buildlog("Warning : $file is not valid INI, skipped");
        ++$errors;
        continue;
    }

    $tip = (object) $tip;

    if (!isset($tip->title) || !isset($tip->id) || !isset($tip->code)) {
        buildlog("Missing required field(s) in $file, skipped");
        ++$errors;
        continue;
    }

    $tips[$tip->id] = $tip;
}

uksort($tips, function (string $a, string $b) : int {
    return strtolower($a) <=> strtolower($b);
});

$php = [];
$errormessagelist = []; // title => id
$silentList = [];       // id => title

foreach ($tips as $id => $tip) {
    $title = rst_inline_to_md($tip->title);
    $description = rst_inline_to_md($tip->description ?? '');
    $description = str_replace("\n", "\n\n", $description);

    $page = [];
    $page[] = "# $title";
    $page[] = '';

    // Prototype-only SEO placement: mdBook has no per-page <head> hook out
    // of the box, so this embeds <meta> tags directly in the body. Raw HTML
    // passes through pulldown-cmark untouched, but this is not a real <head>
    // - a production migration needs an mdbook preprocessor that moves these
    // into head.hbs instead.
    $first = preg_split('/[.?;\n]/', $description)[0] ?? $title;
    $page[] = '<!-- SEO meta (prototype placement; move into <head> via a preprocessor for production) -->';
    $page[] = '<meta name="description" content="'.htmlspecialchars($title.': '.$first.'.', ENT_QUOTES).'">';
    $page[] = '<meta property="og:title" content="'.htmlspecialchars($title, ENT_QUOTES).'">';
    $page[] = '<meta property="og:description" content="'.htmlspecialchars($first, ENT_QUOTES).'">';
    $page[] = '<meta property="og:type" content="article">';
    $page[] = '<meta name="twitter:card" content="summary_large_image">';
    $page[] = '<meta name="twitter:title" content="'.htmlspecialchars($title, ENT_QUOTES).'">';
    $page[] = '';

    $page[] = $description;
    $page[] = '';

    $page[] = '## PHP code';
    $page[] = '';
    $page[] = md_code_block('php', $tip->code ?? '');
    $page[] = '';

    $page[] = '## Before';
    $page[] = '';
    $page[] = md_code_block('text', $tip->before ?? '');
    $page[] = '';

    $page[] = '## After';
    $page[] = '';
    $page[] = md_code_block('text', $tip->after ?? '');
    $page[] = '';

    $page[] = '## PHP version change';
    $page[] = '';
    if (!empty($tip->deprecation)) {
        $page[] = 'This behavior was deprecated in '.$tip->deprecation.'.';
        $page[] = '';
    }
    $page[] = 'This behavior changed in '.($tip->phpVersion ?? '?').'.';
    $page[] = '';

    if (isset($tip->phpVersion)) {
        $php[$tip->phpVersion][$title] = $id;
    }

    if (!empty($tip->seeAlso) && is_array($tip->seeAlso)) {
        $seeAlso = [];
        foreach ($tip->seeAlso as $linkTitle => $link) {
            if ($link === '' || is_int($linkTitle)) {
                continue;
            }
            $seeAlso[] = '- ['.$linkTitle.']('.$link.')';
        }
        if (!empty($seeAlso)) {
            $page[] = '## See Also';
            $page[] = '';
            $page[] = implode("\n", $seeAlso);
            $page[] = '';
        }
    }

    if (!empty($tip->phpError) && is_array($tip->phpError)) {
        $lines = [];
        foreach ($tip->phpError as $msgTitle => $msgId) {
            if ($msgId === 'none' || $msgId === '') {
                continue;
            }
            $errormessagelist[$msgTitle] = $id;
            $lines[] = '- ['.$msgTitle.'](https://php-errors.readthedocs.io/en/latest/messages/'.urlencode($msgId).'.html)';
        }
        if (!empty($lines)) {
            $page[] = '## Error Messages';
            $page[] = '';
            $page[] = implode("\n", $lines);
            $page[] = '';
        }
    }

    if (!empty($tip->analyzer) && is_array($tip->analyzer) && $tip->analyzer[0] !== 'none') {
        $lines = [];
        foreach ($tip->analyzer as $rule) {
            if ($rule === 'none' || $rule === '') {
                continue;
            }
            $lines[] = '- ['.$rule.'](https://exakat.readthedocs.io/en/latest/Reference/Rules/'.$rule.'.html)';
        }
        if (!empty($lines)) {
            $page[] = '## Analyzer';
            $page[] = '';
            $page[] = implode("\n", $lines);
            $page[] = '';
        }
    }

    if (!empty($tip->keywords) && is_array($tip->keywords) && in_array('silent', $tip->keywords, true)) {
        $silentList[$id] = $title;
    }

    file_put_contents($outDir.'/behavior/'.$id.'.md', implode("\n", $page));
}

print "Generated ".count($tips)." behavior pages (".$errors." skipped)\n";

// -- SUMMARY.md ---------------------------------------------------------

$summary = [];
$summary[] = '# Summary';
$summary[] = '';
$summary[] = '- [Per PHP version](phpversionindex.md)';
$summary[] = '- [Error Messages](errormessages.md)';
$summary[] = '- [Silent changed behaviors](silent.md)';
$summary[] = '';
$summary[] = '# Changed behaviors';
$summary[] = '';
foreach ($tips as $id => $tip) {
    $title = rst_inline_to_md($tip->title);
    $summary[] = '- ['.$title.'](behavior/'.$id.'.md)';
}
file_put_contents($outDir.'/SUMMARY.md', implode("\n", $summary)."\n");

// -- phpversionindex.md ---------------------------------------------------

$versionMd = ["# Per PHP version", ''];
krsort($php);
foreach ($php as $version => $list) {
    ksort($list);
    $versionMd[] = "## $version";
    $versionMd[] = '';
    foreach ($list as $title => $id) {
        $versionMd[] = '- ['.$title.'](behavior/'.$id.'.md)';
    }
    $versionMd[] = '';
}
file_put_contents($outDir.'/phpversionindex.md', implode("\n", $versionMd));

// -- errormessages.md -----------------------------------------------------

$errorMd = ["# PHP Error Messages", ''];
foreach ($errormessagelist as $message => $id) {
    $errorMd[] = '- ['.$message.'](behavior/'.$id.'.md)';
}
file_put_contents($outDir.'/errormessages.md', implode("\n", $errorMd)."\n");

// -- silent.md --------------------------------------------------------------

$silentMd = [
    '# Silent changed behaviors',
    '',
    'These changes do not emit any error. They are different between versions, but keep executing the task. They might be only detected by actual inspection of the result.',
    '',
];
foreach ($silentList as $id => $title) {
    $silentMd[] = '- ['.$title.'](behavior/'.$id.'.md)';
}
file_put_contents($outDir.'/silent.md', implode("\n", $silentMd)."\n");

print "processed ".count($files)." files with $errors error(s)\n";
