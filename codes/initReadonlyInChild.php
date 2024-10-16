<?php

class x {
	public readonly int $property;
}

class y extends x {
    function __construct() {
        $this->property = 5;
    }
}

$x = new y;
echo $x->property;

?>