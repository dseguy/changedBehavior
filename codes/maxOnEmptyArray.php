<?php

try {
	$a = max([]);
} catch (\Error $e) {
	print $e->getMessage();
}

var_dump($a);

?>