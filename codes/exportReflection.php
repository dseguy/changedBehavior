<?php

class A {}

$reflector = new ReflectionClass('A');

print Reflection::export($reflector, true);