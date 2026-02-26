<?php

// code from https://www.reddit.com/r/PHP/comments/1rd3j74/php_85_reflectionnamedtypegetname_change/
class Foo
{
    function poop (static $a): static
    {
    }
}

$refMethod = new ReflectionMethod('Foo', 'poop');
$refParam = $refMethod->getParameters()[0];

print_r(array(
    'paramType' => $refParam->getType()->getName(),
    'returnType' => $refMethod->getReturnType()->getName(),
));