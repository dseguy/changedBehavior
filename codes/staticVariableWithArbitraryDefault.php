<?php

function foo() {
	static $x = goo(1);
	
	return ++x;
}

function goo() {
	return 3;
}

echo foo();
echo foo();

?>