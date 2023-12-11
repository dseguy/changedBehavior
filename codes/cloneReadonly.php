<?php

class x {
	readonly int $p;
	
	function __construct() {
		$this->p = 2;
	}
	
	function __clone() {
		$this->p++;
	}
}

$x = new x;
$y = clone $x;

var_dump($y);

?>