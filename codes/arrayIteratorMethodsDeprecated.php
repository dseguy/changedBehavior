<?php

$it = new ArrayIterator(['b' => 2, 'a' => 1]);

var_dump($it->getFlags());
$it->setFlags(ArrayIterator::ARRAY_AS_PROPS);
var_dump($it->getFlags());
$it->asort();
print_r(iterator_to_array($it));

?>
