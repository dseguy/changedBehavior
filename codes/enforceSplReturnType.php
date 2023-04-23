<?php

class x extends LimitIterator {
	function __construct() { echo __METHOD__; }
	public function current() {}

}

new x;
?>

