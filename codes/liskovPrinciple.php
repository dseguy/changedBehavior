<?php

class Foo {
    public function process(stdClass $item): array{}
}

class SuperFoo extends Foo{
    public function process(array $items): array{}
    //                      ^^^^^ mismatch
}

?>