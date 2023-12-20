<?php

$array = ['a' => 1];

foo(...$array);

function foo($a) {
	echo $a;
}

?>