<?php

$doc = new DOMDocument();
$doc->loadXML('<root/>');

try {
    $doc->xmlEncoding = 'UTF-8';
} catch (\Error $e) {
    echo get_class($e), ': ', $e->getMessage(), "\n";
}

?>
