<?php

class x {
	function foo() {
		echo get_class();
		echo get_parent_class();
	}
}

(new x)->foo();

?>