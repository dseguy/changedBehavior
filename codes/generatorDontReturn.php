<?php

function foo() {
    yield 'a';
    
    return 2;
}

foreach(foo() as $a) {
    print $a.PHP_EOL;
}

?>