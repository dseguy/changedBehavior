<?php

try {
    var_dump(number_format(1234.5678, PHP_INT_MIN));
} catch (\ValueError $e) {
    echo $e->getMessage(), "\n";
}

?>
