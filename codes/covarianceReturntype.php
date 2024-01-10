<?php

interface i {}

interface j extends i {}

class x {
	function foo() : i {
	
	}
}

class y extends x {
	function foo() : j {
	
	}
}

var_dump(new y);

?>