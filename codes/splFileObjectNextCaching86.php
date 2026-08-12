<?php

$path = tempnam(sys_get_temp_dir(), 'spl');
file_put_contents($path, "line1\nline2\nline3\n");

$f = new SplFileObject($path);
$f->next();
var_dump(trim($f->current()));

unlink($path);

?>
