<?php

class x implements iterator {
	function __construct() { echo __METHOD__; }
	public current() {}
}

new x;

?>