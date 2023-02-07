<?php

try {
	$a = min([]);
} catch (\Error $e) {
	print $e->getMessage();
}

var_dump($a);

?>