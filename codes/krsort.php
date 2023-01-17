<?php

$x = array('a' => 1, 
		   0 => 2, 
		   1 => 3, 
		   '0' => 4,
);
ksort($x);
print_r($x);