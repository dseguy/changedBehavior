<?php

trait t {
	static function foo() { print __METHOD__;}
	static $x = 'A';
}

echo T::foo();
echo T::$x;

?>