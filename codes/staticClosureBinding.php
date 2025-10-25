<?php

class A {}

$fn = static function () {  };

$d = $fn->bindTo(new A, 'A');