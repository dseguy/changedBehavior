<?php

$array = [1,2,3, &$array];
$array2 = [1,2,3, &$array2];

var_dump($array == $array2);

?>