<?php

$a = [[[[]]]];

$b = serialize($a);

print_r(unserialize($b, ['max_depth' => 2]));