<?php

try {
    $hash = sodium_crypto_pwhash_str('password', 1, 1);
    var_dump($hash);
} catch (\ValueError $e) {
    echo "ValueError: ".$e->getMessage()."\n";
} catch (\SodiumException $e) {
    echo "SodiumException: ".$e->getMessage()."\n";
}

?>
