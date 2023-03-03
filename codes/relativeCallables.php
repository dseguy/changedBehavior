<?php

class x {
	function foo() {
		call_user_func("self::method");
	}
	
	static function method() {
		print __METHOD__;
	}
}

(new x)->foo();
