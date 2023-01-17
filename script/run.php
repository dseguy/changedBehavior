<?php

$scripts = glob('codes/*.php');

$begin = hrtime(true);

$phps = array('PHP_8.3' => 'php82',
 			  'PHP_8.2' => 'php82',
 			  'PHP_8.1' => 'php81',
 			  'PHP_8.0' => 'php80',
 			  'PHP_7.4' => 'php74',
 			  'PHP_7.3' => 'php73',
			);

$total = 0;

foreach($scripts as $script) {
	$hash = array();
	foreach($phps as $name => $php) {
		$result = shell_exec("$php $script 2>&1");
		$hash[$name] = crc32($result);
		$file = basename($script, '.php');
		if (!file_exists('results/'.$name)) {
			mkdir('results/'.$name, 0755);
		}

		file_put_contents('results/'.$name.'/'.$file.'.txt', $result);
		print '.';
		++$total;
	}
	
	if (count(array_count_values($hash)) < 2) {
		print "Warning : no differences in $script\n";
	}
}

$end = hrtime(true);

print PHP_EOL;
print count($scripts).' scripts'.PHP_EOL;
print $total.' results'.PHP_EOL;
print number_format(($end - $begin) / 1000000)." ms\n";

?>