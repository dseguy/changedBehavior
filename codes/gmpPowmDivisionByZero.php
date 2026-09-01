<?php

try {
    var_dump(gmp_strval(gmp_powm(2, 3, 0)));
} catch (\DivisionByZeroError $e) {
    echo "DivisionByZeroError: ".$e->getMessage()."\n";
}

?>
