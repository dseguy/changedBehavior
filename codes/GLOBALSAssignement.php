<?php

$GLOBALS['a']  = 1;

$b = &$GLOBALS;
$b = array();

print_r($GLOBALS);