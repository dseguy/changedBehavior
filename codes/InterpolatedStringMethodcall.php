<?php

$bar = "abc";

echo "foo$bar"::foo();

class fooabc{
	static function foo() {
		print __METHOD__;
	}
}

?>