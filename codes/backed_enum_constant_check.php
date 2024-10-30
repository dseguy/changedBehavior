<?php

const D = 1;

enum Foo: string {
    case A = '/' . D;
    case B = '/' . B;
    const C = 1;
}

Foo::A; // first actual usage of the case

?>