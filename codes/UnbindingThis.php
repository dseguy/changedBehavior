<?php

class x {
	private $p = 1;
	
	function foo() {
		return function () { return $this->p; };
	}
}

$x = new x;
$closure = $x->foo();
print $closure->bindTo(null);

?>