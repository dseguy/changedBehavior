<?php

$bar = "abc";

echo "foo$bar"[0];
echo "foo$bar"::foo();

class fooabc{
	static function foo() {
		print __METHOD__;
	}
}

?>
