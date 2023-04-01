<?php

class A extends DateTime{}

$date = new DateTimeImmutable("2014-06-20 11:45 Europe/London");

$mutable = A::createFromImmutable( $date );

var_dump($mutable);
?>