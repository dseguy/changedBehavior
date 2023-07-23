<?php

$files = glob('codes/*');

$stats = array();
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
			
			if ($version !== 'PHP_7.3') {
				$stats[$version] = ($stats[$version] ?? 0) + 1;
			}
		}
	}
	
	printf("%-50s : $version\n", $base);
}

print_r($stats);

?>