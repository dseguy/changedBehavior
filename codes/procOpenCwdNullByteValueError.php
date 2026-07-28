<?php

try {
    var_dump(proc_open('echo hi', [], $pipes, "foo\0bar"));
} catch (\ValueError $e) {
    echo $e->getMessage(), "\n";
}

?>
