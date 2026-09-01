<?php

try {
    var_dump(file_exists("/tmp/foo\0bar"));
} catch (\ValueError $e) {
    echo $e->getMessage(), "\n";
}

?>