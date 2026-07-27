<?php

try {
    var_dump(dl("foo\0bar"));
} catch (\ValueError $e) {
    echo $e->getMessage(), "\n";
}

?>
