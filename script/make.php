<?php

/**
 * Reads docs/*.ini and emits the mdBook src/ tree that book.toml builds.
 *
 * Run from the repo root:
 *
 *   php script/make.php
 *   mdbook build .
 */

include 'vendor/autoload.php';

use samdark\sitemap\Sitemap;

$outDir = 'src';

if (!file_exists($outDir.'/behavior')) {
    mkdir($outDir.'/behavior', 0755, true);
}

// Static SEO/verification files: mdBook has no html_extra_path equivalent,
// but copies any non-Markdown file placed under src/ through to the site
// root as-is, so these just need to live in src/.
foreach (['googlee919cb0917e4fefc.html', 'robots.txt', 'BingSiteAuth.xml', 'logo.png'] as $staticFile) {
    copy($staticFile, $outDir.'/'.$staticFile);
}

$sitemap = new Sitemap($outDir.'/sitemap.xml');

$buildLog = fopen('build.log', 'w+');

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

const SITE_URL = 'https://php-changed-behaviors.readthedocs.io/en/latest/';

// IndexNow key (https://www.bing.com/indexnow/getstarted). Must match the
// <key>.txt file this script writes to the site root for Bing to verify
// ownership before accepting submissions from scripts/indexnow_submit.php.
const INDEXNOW_KEY = ''; // TODO: paste the IndexNow key here

// Per-page structured data. mdBook's theme/head.hbs supplies the generic
// OG/Twitter tags via its own {{ title }} template var; this JSON-LD block
// is what scripts/description.py and scripts/canonical.py (post-build,
// see .readthedocs.yaml) read to inject the real per-page <meta
// name="description"> and <link rel="canonical">. Mirrors the shape used
// in the sibling php-dictionary migration, adapted to this site's fields.
function json_ld(object $tip, string $title, string $description, string $modified) : string {
    $url = SITE_URL.'behavior/'.$tip->id.'.html';
    $first = preg_split('/[.?;\n]/', $description)[0] ?? $title;

    $data = [
        '@context' => 'https://schema.org',
        '@type' => 'TechArticle',
        '@id' => $url,
        'headline' => $title,
        'name' => $title,
        'description' => trim($first).'.',
        'url' => $url,
        'inLanguage' => 'en',
        'dateModified' => $modified,
        'about' => [
            '@type' => 'SoftwareApplication',
            'name' => 'PHP',
            'applicationCategory' => 'DeveloperApplication',
        ],
        'isPartOf' => [
            '@type' => 'WebSite',
            '@id' => SITE_URL,
            'name' => 'PHP Changed Behaviors',
            'url' => SITE_URL,
        ],
        'breadcrumb' => [
            '@type' => 'BreadcrumbList',
            'itemListElement' => [
                ['@type' => 'ListItem', 'position' => 1, 'name' => 'PHP Changed Behaviors', 'item' => SITE_URL],
                ['@type' => 'ListItem', 'position' => 2, 'name' => $title],
            ],
        ],
    ];

    return '<script type="application/ld+json">'.json_encode($data, JSON_UNESCAPED_SLASHES).'</script>';
}

// Structured data for the static index/listing pages (phpversionindex.md,
// errormessages.md, silent.md). Mirrors json_ld() above but as a
// CollectionPage, since these list other TechArticle pages rather than
// being one themselves.
function collection_json_ld(string $title, string $description, string $path) : string {
    $url = SITE_URL.$path;

    $data = [
        '@context' => 'https://schema.org',
        '@type' => 'CollectionPage',
        '@id' => $url,
        'name' => $title,
        'description' => $description,
        'url' => $url,
        'inLanguage' => 'en',
        'isPartOf' => [
            '@type' => 'WebSite',
            '@id' => SITE_URL,
            'name' => 'PHP Changed Behaviors',
            'url' => SITE_URL,
        ],
    ];

    return '<script type="application/ld+json">'.json_encode($data, JSON_UNESCAPED_SLASHES).'</script>';
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
    $tip->sourceFile = $file;

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
$indexNowUrls = [];
$llmsEntries = [];      // title => "[title](url): description" line

foreach ($tips as $id => $tip) {
    $title = rst_inline_to_md($tip->title);
    $description = rst_inline_to_md($tip->description ?? '');
    $description = str_replace("\n", "\n\n", $description);
    $url = SITE_URL.'behavior/'.$id.'.html';
    $firstSentence = trim(preg_split('/[.?;\n]/', $description)[0] ?? $title).'.';
    $llmsEntries[$title] = '['.$title.']('.$url.'): '.$firstSentence;

    $page = [];
    $page[] = "# $title";
    $page[] = '';

    $modified = date('c', filemtime($tip->sourceFile));
    $page[] = json_ld($tip, $title, $description, $modified);
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

    $sitemap->addItem($url);
    $indexNowUrls[] = $url;
}

$sitemap->write();

// -- IndexNow submission payload ---------------------------------------
// Consumed by scripts/indexnow_submit.php (post-build) to notify Bing,
// Yandex, Seznam and Naver of the current URL set without waiting for a
// recrawl. Google does not participate in IndexNow.
if (INDEXNOW_KEY === '') {
    buildlog('Warning: INDEXNOW_KEY is empty, indexnow.json will not verify with Bing until it is set.');
}

$indexNowPayload = [
    'host' => parse_url(SITE_URL, PHP_URL_HOST),
    'key' => INDEXNOW_KEY,
    'keyLocation' => SITE_URL.INDEXNOW_KEY.'.txt',
    'urlList' => $indexNowUrls,
];
file_put_contents($outDir.'/indexnow.json', json_encode($indexNowPayload, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT));

if (INDEXNOW_KEY !== '') {
    file_put_contents($outDir.'/'.INDEXNOW_KEY.'.txt', INDEXNOW_KEY);
}

// -- llms.txt -------------------------------------------------------------
// Flat "[title](url): description" index for AI crawlers/agents, one line
// per behavior page, sorted by title. Same convention as the sibling
// php-dictionary site.
ksort($llmsEntries, SORT_STRING);
file_put_contents($outDir.'/llms.txt', implode("\n", $llmsEntries)."\n");

print "Generated ".count($tips)." behavior pages (".$errors." skipped)\n";
print "Wrote indexnow.json with ".count($indexNowUrls)." URL(s)\n";
print "Wrote llms.txt with ".count($llmsEntries)." entries\n";

// -- SUMMARY.md ---------------------------------------------------------

$summary = [];
$summary[] = '# Summary';
$summary[] = '';
$summary[] = '- [Introduction](introduction.md)';
$summary[] = '- [Per PHP version](phpversionindex.md)';
$summary[] = '- [Silent changed behaviors](silent.md)';
$summary[] = '- [Error Messages](errormessages.md)';
$summary[] = '';
$summary[] = '# Changed behaviors';
$summary[] = '';
foreach ($tips as $id => $tip) {
    $title = rst_inline_to_md($tip->title);
    $summary[] = '- ['.$title.'](behavior/'.$id.'.md)';
}
file_put_contents($outDir.'/SUMMARY.md', implode("\n", $summary)."\n");

// -- phpversionindex.md ---------------------------------------------------

$versionMd = [
    "# Per PHP version",
    '',
    collection_json_ld(
        'Per PHP version',
        'Behavior changes in PHP, grouped by the version where they were introduced.',
        'phpversionindex.html'
    ),
    '',
];
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

$errorMd = [
    "# PHP Error Messages",
    '',
    collection_json_ld(
        'PHP Error Messages',
        'PHP error and deprecation messages, linked to the behavior change that produces them.',
        'errormessages.html'
    ),
    '',
];
foreach ($errormessagelist as $message => $id) {
    $errorMd[] = '- ['.$message.'](behavior/'.$id.'.md)';
}
file_put_contents($outDir.'/errormessages.md', implode("\n", $errorMd)."\n");

// -- silent.md --------------------------------------------------------------

$silentMd = [
    '# Silent changed behaviors',
    '',
    collection_json_ld(
        'Silent changed behaviors',
        'Behavior changes that do not emit any error message, only affecting the result at runtime.',
        'silent.html'
    ),
    '',
    'These changes do not emit any error. They are different between versions, but keep executing the task. They might be only detected by actual inspection of the result.',
    '',
];
foreach ($silentList as $id => $title) {
    $silentMd[] = '- ['.$title.'](behavior/'.$id.'.md)';
}
file_put_contents($outDir.'/silent.md', implode("\n", $silentMd)."\n");

print "processed ".count($files)." files with $errors error(s)\n";
