<?php

class X {
    readonly public int $p;
    
    function foo() {
        $this->p = 2;
    }
    
    function __clone() {
        $ref = &$this->p;
    }
}

$x = new x;
clone $x;