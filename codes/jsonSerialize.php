<?php

class x implements JsonSerializable {
	function __construct() { echo __METHOD__; }
	function jsonSerialize() {}
}

new x;

?>