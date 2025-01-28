<?php

class x {
    function __construct($i = 0) { echo __METHOD__.PHP_EOL;}
    
    function __invoke()          { echo __METHOD__.PHP_EOL;}
}

$x = new x;

$y = new $x()();
// identical to 
//$y = (new $x(0)) ()

var_dump($y);
// NULL 

?>