<?php

class Data {
    public $a = 1;
    public $b = 2;
}

var_dump(http_build_query(new Data()));

?>
