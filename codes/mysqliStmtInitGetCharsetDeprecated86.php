<?php

$mysqli = new mysqli();

try {
    $mysqli->stmt_init();
} catch (\Error $e) {
    echo "Error: ".$e->getMessage()."\n";
}

try {
    var_dump(mysqli_get_charset($mysqli));
} catch (\Error $e) {
    echo "Error: ".$e->getMessage()."\n";
}

?>
