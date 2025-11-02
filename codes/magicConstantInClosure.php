<?php

$foo = fn() => __FUNCTION__;

$closure = function() { return __FUNCTION__;};

echo $foo();

echo $closure();


?>