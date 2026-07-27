<?php

$dir = sys_get_temp_dir() . '/scandir_86_test';
@mkdir($dir);
touch($dir . '/a.txt');
touch($dir . '/b.txt');

try {
    var_dump(scandir($dir, 99));
} catch (\ValueError $e) {
    echo $e->getMessage(), "\n";
}

?>
