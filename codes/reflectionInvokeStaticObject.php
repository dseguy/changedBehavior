<?php

class C {
    public static function staticMethod() {
        return "called";
    }
}

$rm = new ReflectionMethod(C::class, 'staticMethod');
var_dump($rm->invoke(new C()));

?>
