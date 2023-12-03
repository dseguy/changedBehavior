<?php

foreach([0, '', null, []] as $a )
	switch($a) {
		case 0;
			print "Zero\n";
			break;
			
		case '':
			print "Empty string\n";
			break;
			
		case []:
			print "[]\n";
			break;
	}

?>