<?php

$files = glob('codes/*');

foreach($files as $file) {
	$base = basename($file, '.php');
	
	$results = glob('results/*/'.$base.'.txt');

	$version = '';
	$size = 0;
	foreach($results as $result) {
		$s2 = filesize($result);
		if ($s2 != $size) {
			$version = basename(dirname($result));
			$size = $s2;
		}
	}
	
	print "$base : $version\n"	;
}

?>