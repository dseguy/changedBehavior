<?php

class X {
    function __toString() {
        throw new \Exception('error'.__METHOD__);
    }
}

(string) new X;

?>