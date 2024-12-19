.. _`ceil()-strict-mode`:

ceil() Strict Mode
==================
ceil() doesn't accept internal objects that can be converted to integer. This is the case for gmp and bcmath objects, as shown in the example. Since PHP 8.0, only integers and floats are allowed.

PHP code
________
.. code-block:: php

   <?php
   
   $a = gmp_init(123456);
   
   echo ceil($a);
   
   ?>

Before
______
.. code-block:: output

   123456

After
______
.. code-block:: output

   PHP Fatal error:  Uncaught TypeError: ceil(): Argument #1 ($num) must be of type int|float, GMP given in /codes/ceilStrictMode.php:5
   Stack trace:
   #0 /codes/ceilStrictMode.php(5): ceil(Object(GMP))
   #1 {main}
     thrown in /codes/ceilStrictMode.php on line 5
   
   Fatal error: Uncaught TypeError: ceil(): Argument #1 ($num) must be of type int|float, GMP given in /codes/ceilStrictMode.php:5
   Stack trace:
   #0 /codes/ceilStrictMode.php(5): ceil(Object(GMP))
   #1 {main}
     thrown in /codes/ceilStrictMode.php on line 5
   


PHP version change
__________________
This behavior changed in 8.0


