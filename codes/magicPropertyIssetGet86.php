<?php

#[AllowDynamicProperties]
class Magic {
    public function __isset($name) {
        echo "__isset($name) called\n";
        $this->$name = 'materialized-by-isset';
        return true;
    }
    public function __get($name) {
        echo "__get($name) called\n";
        return 'from __get';
    }
}

$m = new Magic();
var_dump($m->x ?? 'default');

?>
