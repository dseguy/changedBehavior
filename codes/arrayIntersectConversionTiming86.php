<?php

class Stateful {
    private static $calls = 0;
    public function __toString(): string {
        self::$calls++;
        echo "toString call #".self::$calls."\n";
        return 'x';
    }
}

$a = [new Stateful()];
$b = ['x'];
$c = ['x'];

$result = array_intersect($a, $b, $c);
var_dump(count($result));

?>
