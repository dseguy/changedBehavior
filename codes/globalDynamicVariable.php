<?php

$variable = (object) ['global' => 'a'];
$a = 1;
// Forbidden in PHP 7
global $normalGlobal;

// Forbidden in PHP 7
global $$variable->global ;

// Tolerated in PHP 7
global ${$variable->global}; 

foo();

function foo() {
    global $a;
    
    echo $a;
}
?>