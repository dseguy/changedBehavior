<?php

$list = $argv;
array_shift($list);

$total = 0;
foreach($list as $element) {
    if (substr($element, -4) === ".ini") {
        $element = substr($element, 0, -4);
    }
    if (substr($element, -4) === ".txt") {
        $element = substr($element, 0, -4);
    }
    if (substr($element, -4) === ".php") {
        $element = substr($element, 0, -4);
    }

	if (!file_exists('codes/'.$element.'.php')) {
		print "No such CC as $element in codes\n. Omitting.\n";
		continue; 
	}
	
	++$total;
	
	shell_exec('git stage codes/'.$element.'.php');
	shell_exec('git stage docs/'.$element.'.ini');
	shell_exec('git stage results/*/'.$element.'.txt');
	shell_exec('git stage behavior/'.$element.'.rst');
	shell_exec('git stage *.rst');
	shell_exec('git stage sitemap.xml');
}

print "Found $total elements in the list of ".count($list)." provided\n";

if (!file_exists('docs/'.$element.'.ini')) {
	print "Warning: No documentation available\n";
}

$count = trim(shell_exec('git status | grep "new file" | wc -l'));
print "$count elements in stage\n";
print "git commit -m 'Updated description of ".implode(', ', $list)."' \n";
?>