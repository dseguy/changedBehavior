<?php

class Options {
    public $level = 6;
}

$context = deflate_init(ZLIB_ENCODING_RAW, new Options());
var_dump($context !== false);

?>
