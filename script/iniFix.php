<?php

$files = glob("docs/*.ini");

foreach($files as $file) {
	print $file.PHP_EOL;
	processFile($file);
}

function processFile(string $file) {
	$raw = file_get_contents($file);

	$ini = parse_ini_file($file, true);

	if (!checkIni($ini, stripslashes($raw))) {
		print "Must save $file\n";
		file_put_contents($file, fixRawIni($raw));
	}
}

function fixRawIni(string $fixed) : string {
	$fixed = str_replace('\\', '\\\\', $fixed); // saves the existing \\
	$fixed = str_replace('"', '\\"', $fixed);
	$fixed = str_replace('\\\\\\"', '\\"', $fixed); // avoid duplicating the correct existings
	$fixed = preg_replace('/\\\\(";?\n[a-z;\[\n])/m', '$1', $fixed);
	$fixed = preg_replace('/\\\\(";?\n)\s*$/m', '$1', $fixed);
	$fixed = preg_replace('/(\n[a-zA-Z;\[\]]+\s*=\s*)\\\\"/m', '$1"', $fixed);
	$fixed = preg_replace('/^([a-zA-Z;\[\]]+\s*=\s*)\\\\"/m', '$1"', $fixed);
	$fixed = str_replace('; related[] = \\""', '; related[] = ""', $fixed);
	$fixed = str_replace('"\\"', '""', $fixed);
	
	$res = parse_ini_string($fixed);
	if ($res === null) { 
		print "Compilation failed\n"; 
		die();
	}
	
	return $fixed;
}

			
function checkIni($ini, $raw, $name = '') : bool {
	$return = true;
	
	foreach($ini as $entry => $value) {
		if (is_array($value)) { 
			$return = $return && checkIni($value, $raw, $entry);
			continue;
		}
	
		if (!str_contains($raw, $value)) {
			$return = false;
			print "Missing $name $entry\n";
		}
	}
	
	return $return;
}

?>