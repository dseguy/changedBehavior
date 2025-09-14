<?php

// Illustration courtesy of Doug Bierer
$obj = new ArrayObject(['A' => 1,'B' => 2,'C' => 3]);
var_dump($obj->getArrayCopy());
var_dump(get_object_vars($obj));

?>