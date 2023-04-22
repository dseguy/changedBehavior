<?php

class never {
	function __construct() {
		print __METHOD__;
	}
}

new never;

?>