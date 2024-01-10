<?php

interface i {}

interface j extends i {}

class x {
	function foo(j $a) {
	
	}
}

class y extends x {
	function foo(i $a) {
	
	}
}

var_dump(new y);

?>