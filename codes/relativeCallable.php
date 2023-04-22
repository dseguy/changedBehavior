<?php

class x {
	function a() {
		print __METHOD__;
	}
	
	function b() {
		call_user_func("self::a");
	}
}

(new x)->b();

?>