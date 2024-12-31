<?php

// PHP 5.6- typed with Exception
class foo { 
    static function bar(\Exception $e) {
        print $e->getMessage();
    } 
}

set_exception_handler([Foo::class, 'bar']);

// Produces an error
1 / 0;

?>