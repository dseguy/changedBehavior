.. _`can-clone-readonly-properties`:

Can Clone Readonly Properties
=============================
Readonly properties may be changed, both at constructor and cloning time, since PHP 8.3. Until then, they could not be changed, once set.

PHP code
________
.. code-block:: php

   <?php
   
   class x {
   	readonly int $p;
   	
   	function __construct() {
   		$this->p = 2;
   	}
   	
   	function __clone() {
   		$this->p++;
   	}
   }
   
   $x = new x;
   $y = clone $x;
   
   var_dump($y);
   
   ?>

Before
______
.. code-block:: output

   PHP Fatal error:  Uncaught Error: Cannot modify readonly property x::$p in /codes/cloneReadonly.php:11
   Stack trace:
   #0 /codes/cloneReadonly.php(16): x->__clone()
   #1 {main}
     thrown in /codes/cloneReadonly.php on line 11
   
   Fatal error: Uncaught Error: Cannot modify readonly property x::$p in /codes/cloneReadonly.php:11
   Stack trace:
   #0 /codes/cloneReadonly.php(16): x->__clone()
   #1 {main}
     thrown in /codes/cloneReadonly.php on line 11
   

After
______
.. code-block:: output

   object(x)#2 (1) {
     ["p"]=>
     int(3)
   }
   


PHP version change
__________________
This behavior changed in 8.3


Error Messages
______________

  + `0 <https://php-errors.readthedocs.io/en/latest/messages/cannot-modify-readonly-property-%25s%3A%3A%24%25s.html>`_



