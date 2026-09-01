<?php

$o = new stdClass();
$o->a = "abc";
$o->b = "def";

$from = mb_convert_variables("UTF-8", "auto", $o);
var_dump($from);
var_dump($o);

?>
