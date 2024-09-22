<?php

include 'vendor/autoload.php';

use samdark\sitemap\Sitemap;
use samdark\sitemap\Index;

// create sitemap
$sitemap = new Sitemap('./sitemap.xml');

if (!file_exists('behavior')) {
	mkdir('behavior', 0755);
} else {
	shell_exec('rm -rf behavior/*');
}

fopen("build.log", "w+");

$behaviors = array();

$behaviors[] = "PHP changed behaviors";
$behaviors[] = "----------------------";
$behaviors[] = "";

$files = glob('docs/*.ini');
$files = array_diff($files, ['docs/skeleton.ini']);
$stats = array('author' => 0,
				);
$errors = 0;
$tips = array();
foreach($files as $file) {
	$tip = parse_ini_file($file);

	if ($tip === null) {
		buildlog("Warning : $file is not valid INI");
		continue;
	}

	$tip = (object) $tip;
	if (!isset($tip->title)) {
		buildlog("No title for $file");
	} else {
		if (!str_contains($tip->title, ' ')) {
			buildlog("suspiciously no white space in title for $file");
		}
	}

	if (!isset($tip->phpError)) {
		buildlog("phpError is missing in $file");
		continue;
	}

	if (!is_string($tip->phpError)) {
		buildlog("phpError must be a string in $file");
		continue;
	}

	if (isset($tip->seeAlso)) {
		$tip->seeAlso = array_filter($tip->seeAlso);
	} else {
		buildlog("Missing seeAlso in $file");
		
		if (!is_array($seeAlso)) {
			buildlog("seeAlso is not an array in $file");
		}
	}
	$tips[$file] = $tip;
}

uksort($tips, function(string $a, string $b) : int { return strtolower($a) <=> strtolower($b); });

$php = array('7.2' => [],
			 '7.3' => [],
			 '7.4' => [],
			 '8.0' => [],
			 '8.1' => [],
			 '8.2' => [],
			 '8.3' => [],
			 '8.4' => [],
			 '9.0' => [],
			);
$stats = array('php' => 0);

$behaviorlist = [];
$errormessagelist = [];
foreach($tips as $file => $changedBehavior) {
	$behavior = [];
	if ($e = check($changedBehavior, $file)) {
		buildlog("Error in file $file : $e");
		++$errors;
		continue;
	}
	
	$anchor = make_anchor($changedBehavior->title);
	$behavior[] = '.. _'.$anchor.':'.PHP_EOL;
	$behavior[] = $changedBehavior->title;
	$behavior[] = str_repeat('=', strlen($changedBehavior->title));
	
	$behavior[] = str_replace("\n", "\n\n", $changedBehavior->description);
	$behavior[] = '';
	
	$code = $changedBehavior->code;
	$code = '   '.str_replace("\n", "\n   ", $code);
	$before = $changedBehavior->before;
	$before = '   '.str_replace("\n", "\n   ", $before);
	$after = $changedBehavior->after;
	$after = '   '.str_replace("\n", "\n   ", $after);

	$behavior[] = <<<CODE
PHP code
________
.. code-block:: php

$code

Before
______
.. code-block:: output

$before

After
______
.. code-block:: output

$after

CODE;
	$behavior[] = '';
	$behavior[] = 'PHP version change';
	$behavior[] = '__________________';
	if (!empty($changedBehavior->deprecation)) {
		$behavior[] = "This behavior was deprecated in ".$changedBehavior->deprecation;
		$behavior[] = '';
	}
	$behavior[] = "This behavior changed in ".$changedBehavior->phpVersion;
	$behavior[] = '';
	
	$php[$changedBehavior->phpVersion][$changedBehavior->title] = '    * :ref:'.$anchor.'';

	if (!empty($changedBehavior->seeAlso)) {
		$seeAlso = array();
		foreach($changedBehavior->seeAlso as $title => $link) {
			if (is_int($title)) {
				buildlog("Wrong title for $link in $file");
			}

			if ($link[0] === '<') {
				buildlog("Check the link on $file: $link");
			}

			if ($link[-1] === '_') {
				buildlog("Check the link on $file: $link");
			}


			$seeAlso[] = '* `'.$title.' <'.$link.'>`_';
		}
		$behavior[] = '';
		$behavior[] = 'See Also';
		$behavior[] = '________';
		$behavior[] = '';
		$behavior[] = implode(PHP_EOL, $seeAlso);
		
		$behavior[] = '';
	}

	if (!empty($changedBehavior->phpError)) {
		$errormessagelist[$changedBehavior->phpError] = $anchor;
		
		$behavior[] = '';
		$behavior[] = 'Error Messages';
		$behavior[] = '______________';
		$behavior[] = '';
		$behavior[] = '`'.$changedBehavior->phpError.' <https://php-errors.readthedocs.io/en/latest/messages/'.php_error_id($changedBehavior->phpError).'.html>`_';
		$behavior[] = '';
		$behavior[] = '';
	}

//	$behavior[] = "\n----\n";
	$behavior[] = PHP_EOL;
	
	$name = $changedBehavior->id;
	file_put_contents('behavior/'.$name.'.rst', implode(PHP_EOL, $behavior));
	
	$behaviorlist[] = '   behavior/'.$name.'.rst';
	
	$sitemap->addItem('https://php-changed-behaviors.readthedocs.io/en/latest/behavior/'.$changedBehavior->id.'.html');
}

print ("Total: ".count(glob("codes/*.php"))." PHP codes\n");

if (!empty($errormessagelist)) {
	$error = array('PHP Error Messages',
				   '--------------------',
					);
					
	foreach($errormessagelist as $message => $link) {
		$error[] = '    * :ref:`'.$message.' <'.trim($link, '`').'>`';
	}
	$error[] = '';
	
	file_put_contents('errormessages.rst', implode(PHP_EOL, $error));
}


$changed = file_get_contents('changed.rst.in');
$changed = str_replace('behaviorlist', implode(PHP_EOL, $behaviorlist), $changed);
file_put_contents('changed.rst', $changed);
print ("processed ".count($files)." file with $errors error\n");

$sitemap->write();


if (!empty($php)) {
	$versionRst = <<<RST
Per PHP version
---------------


RST;
	
	krsort($php);
	$php = array_filter($php);
	foreach($php as $version => $list) {
		ksort($list);
		$versionRst .= "* $version\n";
		$versionRst .= implode(PHP_EOL, $list).PHP_EOL;
		++$stats['php'];
	}
	file_put_contents('phpversionindex.rst', $versionRst);
	print ("processed ".$stats['php']." PHP versions\n");
}

if (!empty($authors)) {
	$authorRst = <<<RST
Author index
------------


RST;
	
	ksort($authors);
	foreach($authors as $name => $list) {
		$authorRst .= "* $name\n";
		$authorRst .= implode(PHP_EOL, $list).PHP_EOL;
		++$stats['author'];
	}
	file_put_contents('authorindex.rst', $authorRst);
	print ("processed ".$stats['author']." authors\n");
}

shell_exec('make html');
print (shell_exec('wc -l build.log') ?? 0)." lines in buildlog.txt\n";

function check(stdClass $tip, string $file) : string {
	if (empty($tip->title)) {
		buildlog("Empty title in $file");
	}

	return '';
}

function make_anchor(string $title) : string {
	$title = '`'.strtr(mb_strtolower($title), ' ', '-').'`';
	return $title;
}

function buildlog($message) {
	static $log;
	
	if (empty($log)) {
		$log = fopen("build.log", "w+");
	}
	
	fwrite($log, $message.PHP_EOL);
}

function php_error_id(string $url) {
	return str_replace(' ', '-', mb_strtolower($url));
}
?>