<?php

class Point {
    public $x = 1;
    public $y = 2;
}

$p = new Point();
array_walk($p, function (&$value, $key) {
    $value = $value * 10;
});
var_dump($p);

?>
