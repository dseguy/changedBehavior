<?php

class x {
	public static $sx = 'SX ';
	public static $sx2 = 'SX2 ';
	
	function foo() {
		print self::$sx;
		print self::$sx2;
	}
}

trait t {
	public static $sx = 'SX ';
}
class y extends x {
	use t;

	function foo() {
		self::$sx = 'SXy ';

		print "in parent x\n";
		parent::foo();

		print "\nin self y\n";
		print self::$sx;
		print self::$sx2;		
	}
}

(new y)->foo();
?>