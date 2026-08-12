<?php

$a = gmp_init(2);
$huge = gmp_init('18446744073709551616');

try {
    var_dump(gmp_strval($a << $huge));
} catch (\ValueError $e) {
    echo "ValueError: ".$e->getMessage()."\n";
}

?>
