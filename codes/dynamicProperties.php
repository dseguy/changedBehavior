<?php


class x {
	function foo() {
		$this->p = 1;
		print $this->p;
	}
}

(new x)->foo();
?>