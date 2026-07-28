<?php

try {
    var_dump(openlog("foo\0bar", LOG_PID, LOG_USER));
} catch (\ValueError $e) {
    echo $e->getMessage(), "\n";
}

?>
