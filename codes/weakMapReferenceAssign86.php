<?php

$map = new WeakMap();
$obj = new stdClass();

$ref =& $map[$obj];
$ref = 'value via reference';

var_dump($map[$obj]);

?>
