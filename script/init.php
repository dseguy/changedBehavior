<?php

$id = $argv[1];

print "initing for \"$id\"\n";
if (file_exists('docs/'.$id.'.ini')) { print "docs/$id.ini already exists.\n"; die();}

if (!file_exists('codes/'.$id.'.php')) { print "Missing code in docs/$id.php"; }

$files = glob("results/*/$id.txt");

if (empty($files)) {
	print "Run first: \nphp script/run.php $id\n";
	die();
}

$phpVersion = "";
$code = "";

foreach($files as $file) {
	$code2 = file_get_contents($file);
	
	if ($code2 !== $code) {
		list(, $phpVersion, ) = explode('/', $file, 3);
		$before = $code;
		$after = $code2;

		$code = $code2;
	}
}
$code = file_get_contents('codes/'.$id.'.php');
$phpVersion = str_replace('PHP_', '', $phpVersion);

$skeleton = file_get_contents('docs/skeleton.ini');

$list = compact('id', 'before', 'code', 'after', 'phpVersion');
foreach($list as $name => $value) {
	$skeleton = preg_replace("/$name = \"\"/m", "$name = \"$value\"", $skeleton);
}

file_put_contents("docs/$id.ini", $skeleton);

print "Written docs/$id.ini (version $phpVersion)\n";
?>