<?php

class Point {
    public readonly int $x = 0;
    public function __construct(?int $x = null) {
        if ($x !== null) {
            $this->x = $x;
        }
    }
}

$p = new Point();
var_dump($p->x);

try {
    $p2 = new Point(5);
    var_dump($p2->x);
} catch (\Error $e) {
    echo "Error: ".$e->getMessage()."\n";
}

?>
