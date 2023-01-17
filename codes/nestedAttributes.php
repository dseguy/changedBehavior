<?php

#[JoinTable(joinColumns: [new JoinColumn])]
class x {
	function __construct() {
		print __METHOD__;
	}
}

new x;

?>