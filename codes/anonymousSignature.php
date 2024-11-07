<?php

$object = new class() extends \A\B\Exception {};

echo get_class($object);