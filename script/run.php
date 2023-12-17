<?php

if (isset($argv[1])) {
	$script = preg_replace('#^(codes/)+#', 'codes/', $argv[1]);
	
	if (substr($argv[1], -4) === '.php') {
		$scripts = array('codes/'.$argv[1]);	
	} else {
		$scripts = array('codes/'.$argv[1].'.php');	
	}
} else {
	$scripts = glob('codes/*.php');
}

$begin = hrtime(true);

$phps = array('PHP_8.4' => 'php84',
 			  'PHP_8.3' => 'php83',
 			  'PHP_8.2' => 'php82',
 			  'PHP_8.1' => 'php81',
 			  'PHP_8.0' => 'php80',
 			  'PHP_7.4' => 'php74',
 			  'PHP_7.3' => 'php73',
 			  'PHP_7.2' => 'php72',
			);

$total = 0;
$i = 0;

foreach($phps as $name => $php) {
	if (!file_exists('results/'.$name)) {
		mkdir('results/'.$name, 0755);
	}
}

foreach($scripts as $script) {
	if (!file_exists($script)) {
		print "No such file as $script\n";
		continue;
	}

	$hash = array();
	foreach($phps as $name => $php) {
		++$i;
		$result = shell_exec("$php $script 2>&1");
		if ($result === null) {
			print "No results for $script ($php)\n";
			continue;
		}
		$hash[$name] = crc32($result);
		$file = basename($script, '.php');
		if (!file_exists('results/'.$name)) {
			mkdir('results/'.$name, 0755);
		}
		
		// removes the current directory from the results.
		$result = str_replace(getcwd(), '', $result);

		file_put_contents('results/'.$name.'/'.$file.'.txt', $result);
		print '.';
		if ($i % 60 === 0) {
			print PHP_EOL;
		}
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