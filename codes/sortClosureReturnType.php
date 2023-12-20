<?php

$array = [1, 2, 3];

// Replace
usort($array, fn($a, $b) => $a > $b);
// With
usort($array, fn($a, $b) => $a <=> $b);

print_r($array);
?>
