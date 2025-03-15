<?php

class A {
    public static function replace($a) {
    	return 'a';
    }
}

class B extends A
{
    public static function work($it) {
		return preg_replace_callback('~\w+~', array('parent', 'parent::replace'), $it);
    }
}

echo b::work('abc');