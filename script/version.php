<?php

$files = glob('codes/*.php');

$stats = array();
foreach($files as $file) {
	$base = basename($file, '.php');
	
	$results = glob('results/*/'.$base.'.txt');
	if (empty($results)) {
		print "Missing results for $base\n  php scripts/run.php $base\n";
		continue;
	}
	sort($results);

	$version = '';
	$size = filesize($results[0]);
	$content = file_get_contents($results[0]);
	foreach($results as $result) {
		$s2 = filesize($result);
		$c2 = file_get_contents($result);

		if ($s2 !== $size) {
			$version = basename(dirname($result));
			$size = $s2;
			
			if ($version !== 'PHP_7.2') {
				$stats[$version] = ($stats[$version] ?? 0) + 1;
			}
			
			continue;
		}

		if ($c2 !== $content) {
			$version = basename(dirname($result));
			$content = $c2;
			
			if ($version !== 'PHP_7.2') {
				$stats[$version] = ($stats[$version] ?? 0) + 1;
			}
			
			continue;
		}
	}
	
	printf("%-50s : $version\n", $base);
}

ksort($stats);
print_r($stats);
print "Total: ".count($files).PHP_EOL;

?>