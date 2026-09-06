<?php

$filters = str_repeat('string.toupper|', 20);
$handle = fopen('php://filter/read='.$filters.'/resource=php://memory', 'r');
var_dump($handle !== false);

?>
