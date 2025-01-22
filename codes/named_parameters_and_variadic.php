<?php

function foo($a, ...$b) {
    echo $a.' '.implode(', ', $b);
}

foo(...["b" => 1], a: 2);

?>