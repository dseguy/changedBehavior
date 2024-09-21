<?php

function foo(int $a = null) {
	var_dump($a);
}

foo(1);
foo(null);

?>