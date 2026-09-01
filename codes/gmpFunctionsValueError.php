<?php

$huge = gmp_init('18446744073709551616');

try {
    var_dump(gmp_strval(gmp_fact($huge)));
} catch (\ValueError $e) {
    echo "ValueError: ".$e->getMessage()."\n";
}

?>
