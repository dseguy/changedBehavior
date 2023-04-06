<?php
$time = new \DateTimeImmutable("-+-1 year");

echo $time->format('Y/m/d H:i:s'), "\n";
?>