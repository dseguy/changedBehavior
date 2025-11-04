<?php

[$a, $b] = 'abc';
[$a, $b] = 123;
[$a, $b] = true;
[$a, $b] = (object) [1,2];

[$a, $b] = null;  // OK

var_dump($a);

?>