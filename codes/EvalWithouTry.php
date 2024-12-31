<?php

try {
    eval('A = 1');
} catch (Error $e) {
    echo $e->getMessage();
}

?>