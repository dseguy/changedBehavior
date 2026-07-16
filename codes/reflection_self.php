<?php

// code from 
class Foo
{
    function poop (self $a): self
    {
    }
}

$refMethod = new ReflectionMethod('Foo', 'poop');
$refParam = $refMethod->getParameters()[0];

print_r(array(
    'paramType' => $refParam->getType()->getName(),
    'returnType' => $refMethod->getReturnType()->getName(),
));