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

	$version = 'PHP_7.1';
	$size = filesize($results[0]);
	$content = file_get_contents($results[0]);
	$finalVersion = 'PHP_7.1';
	foreach($results as $result) {
		$s2 = filesize($result);

		if ($s2 !== $size) {
			
			if ($version !== 'PHP_7.1') {
				$stats[$version] = ($stats[$version] ?? 0) + 1;
				$finalVersion = $version;
			}

			$version = basename(dirname($result));
			$size = $s2;
			
			continue;
		}

		$c2 = file_get_contents($result);
		if ($c2 !== $content) {
			
			if ($version !== 'PHP_7.1') {
				$stats[$version] = ($stats[$version] ?? 0) + 1;
				$finalVersion = $version;
			}

			$version = basename(dirname($result));
			$content = $c2;
			
			continue;
		}
	}
	
			if ($finalVersion === 'PHP_7.1') {
				$stats[$version] = ($stats[$version] ?? 0) + 1;
				$finalVersion = $version;
			}
	

	printf("%-50s : $finalVersion ".(file_exists('./docs/'.$base.'.ini') ? ' ' : '*')."\n", $base);
	
}

ksort($stats);
print_r($stats);
print "Total: ".count($files).PHP_EOL;

?>