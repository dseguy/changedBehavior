<?php

trait t {
    static function foo() { echo __METHOD__; }
    
}

echo t::foo();