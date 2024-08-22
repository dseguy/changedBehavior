<?php

enum A : int{
    case A = 1;
    case B = 1;
}

function foo(?A $x = null) { 
    var_dump($x);
}

foo();