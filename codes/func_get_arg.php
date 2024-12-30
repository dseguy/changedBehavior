<?php

function x($a) {
    print func_get_arg(0);  // 0 
    $a++;
    print func_get_arg(0);  // 1
}

x(0);
?>