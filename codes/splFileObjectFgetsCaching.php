<?php

$path = tempnam(sys_get_temp_dir(), 'spl');
file_put_contents($path, "line1\nline2\nline3\n");

$f = new SplFileObject($path);
var_dump(trim($f->fgets()));
var_dump(trim($f->current()));

for ($i = 0; $i < 5; $i++) {
    $f->next();
}
var_dump($f->key());

unlink($path);

?>