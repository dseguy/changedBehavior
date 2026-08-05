<?php

class X {
    public static function foo() { return 1; }
}

const C1 = X::{[1, 2]}(...); // Cannot use dynamic method name in constant expression

const C2 = X::{0}(...); // Illegal method name

?>