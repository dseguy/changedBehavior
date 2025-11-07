<?php

$array = [null => 1]; // silent error 
var_dump(array_key_exists(null, $array)); 

?>