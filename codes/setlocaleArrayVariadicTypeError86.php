<?php

try {
    var_dump(setlocale(LC_ALL, ['en_US'], 'fr_FR'));
} catch (\TypeError $e) {
    echo "TypeError: ".$e->getMessage()."\n";
}

?>
