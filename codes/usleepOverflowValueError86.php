<?php

try {
    var_dump(usleep(4294967296));
} catch (\ValueError $e) {
    echo "ValueError: ".$e->getMessage()."\n";
}

?>
