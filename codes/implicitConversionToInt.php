<?php
$a = [];
$a[15.5] = 2; // deprecated, as key value loses the 0.5 component
$a[15.0] = 3; // ok, as 15.0 == 15

print $a[15];
?>
