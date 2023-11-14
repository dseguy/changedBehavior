<?php

$files = glob('docs/*.ini');

foreach($files as $file) {
	print "$file\n";
	
	$ini = parse_ini_file($file);
	$name = basename($file, '.ini');
	
	$keywords[$name] = array_filter($ini['keywords']);
}

$all = array_merge(...array_values($keywords));
$stats = array_count_values($all);
asort($stats);
print_r($stats);

?>