<?php

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
		print "Warning : $file is not valid INI\n";
		continue;
	}

	$tip = (object) $tip;
	$tip->seeAlso = array_filter($tip->seeAlso);
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

foreach($tips as $file => $changedBehavior) {
	if ($e = check($changedBehavior, $file)) {
		print "Error in file $file : $e\n";
		++$errors;
		continue;
	}
	
	$behaviors[] = '.. _'.make_anchor($changedBehavior->title).':'.PHP_EOL;
	$behaviors[] = $changedBehavior->title;
	$behaviors[] = str_repeat('=', strlen($changedBehavior->title));
	
	$behaviors[] = str_replace("\n", "\n\n", $changedBehavior->description);
	$behaviors[] = '';
	
	$code = $changedBehavior->code;
	$code = '   '.str_replace("\n", "\n   ", $code);
	$before = $changedBehavior->before;
	$before = '   '.str_replace("\n", "\n   ", $before);
	$after = $changedBehavior->after;
	$after = '   '.str_replace("\n", "\n   ", $after);

	$behaviors[] = <<<CODE
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
	$behaviors[] = '';
	$behaviors[] = 'PHP version change: '.$changedBehavior->phpVersion;
	$php[$changedBehavior->phpVersion][$changedBehavior->title] = '    * :ref:'.make_anchor($changedBehavior->title).'';

	if (!empty($changedBehavior->seeAlso)) {
		$behaviors[] = '';
		foreach($changedBehavior->seeAlso as $title => $link) {
			if (is_int($title)) {
				print "Wrong title for $link\n";
			}
			$behaviors[] = '* `'.$title.' <'.$link.'>`_';
		}
		$behaviors[] = '';
	}
	$behaviors[] = "\n----\n";
	$behaviors[] = PHP_EOL;
}

print "Total: ".count(glob("codes/*.php"))." PHP codes\n";
file_put_contents('changed.rst', implode(PHP_EOL, $behaviors));
print "processed ".count($files)." file with $errors error\n";

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
	print "processed ".$stats['php']." PHP versions\n";
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
	print "processed ".$stats['author']." authors\n";
}

function check(stdClass $tip, string $file) : string {
	if (empty($tip->title)) {
		print "Empty title in $file\n";
	}

	return '';
}

function make_anchor(string $title) : string {
	$title = '`'.strtr(strtolower($title), ' ', '-').'`';
	return $title;
}

?>