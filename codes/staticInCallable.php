<?php
class A
{
    public static function work($it) {
		return preg_replace_callback('~\w+~', array('static', 'static::replace'), $it);
    }
    
    public static function replace($a) {
    	return 'a';
    }
}

echo a::work('abc');