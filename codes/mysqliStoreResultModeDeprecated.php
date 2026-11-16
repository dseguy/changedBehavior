<?php

mysqli_report(MYSQLI_REPORT_OFF);
$mysqli = mysqli_init();
@$mysqli->real_connect('127.0.0.1', 'nouser', 'nopass', 'nodb', 1);
try {
    var_dump(mysqli_store_result($mysqli, 0));
} catch (\Throwable $e) {
    echo get_class($e), ': ', $e->getMessage(), "\n";
}
