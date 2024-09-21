<?php
$array = new SplFixedArray(5);

var_dump($array instanceof Iterator);
var_dump($array instanceof IteratorAggregate);