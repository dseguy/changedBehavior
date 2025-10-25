<?php

function foo() {
    Closure::getCurrent();
}

foo();

?>