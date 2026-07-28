<?php

try {
    parse_str("foo\0bar=1", $result);
    var_dump($result);
} catch (\ValueError $e) {
    echo $e->getMessage(), "\n";
}

?>
