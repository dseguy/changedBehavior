<?php

function make() {
    return static function () {
        return 1;
    };
}

var_dump(make() === make());

?>
