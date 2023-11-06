<?php

trait t {
    function foo() {}
}

trait t2 {
    function foo() {}
}

class A {
        use t, t2 { t::foo as final; }
}
?>