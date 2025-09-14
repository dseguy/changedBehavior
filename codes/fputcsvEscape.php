<?php

$fp = fopen(':memory:', 'w');
var_dump(fputcsv($fp, [1,2,3]));


?>