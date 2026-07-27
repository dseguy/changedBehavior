<?php

try {
    var_dump(putenv("FOO\0BAR=1"));
} catch (\ValueError $e) {
    echo $e->getMessage(), "\n";
}

?>
