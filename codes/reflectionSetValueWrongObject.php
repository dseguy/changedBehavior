<?php

class A {
    public int $prop = 1;
}

class B {
    public int $prop = 0;
}

$rp = new ReflectionProperty(A::class, 'prop');
$rp->setValue(new B(), 42);
print "done\n";

?>
