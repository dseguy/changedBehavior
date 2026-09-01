<?php

var_dump(strcoll('a', 'b'));

$arr = ['banana', 'Apple', 'cherry'];
sort($arr, SORT_LOCALE_STRING);
var_dump($arr);

?>
