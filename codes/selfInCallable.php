<?php

class B
{
    public static function work($it) {
		return preg_replace_callback('~\w+~', array('self', 'self::replace'), $it);
    }

    public static function replace($a) {
    	return 'a';
    }
}

echo b::work('abc');