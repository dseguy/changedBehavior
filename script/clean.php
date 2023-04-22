<?php

$files = glob('results/*/*.txt');

foreach($files as $file) {
	$core = basename($file, '.txt');
	if (!file_exists('codes/'.$core.'.php')) {
		print "$file is missing ($core)\n";
		unlink($file);
	}
}

?>