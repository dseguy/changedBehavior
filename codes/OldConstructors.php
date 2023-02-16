<?php

class x {
	function x() {
		print __METHOD__;
	}

	function foo() {
		print __METHOD__;
	}
}

(new x())->foo();
?>