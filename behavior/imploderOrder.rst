.. _`implode()-arguments-order`:

implode() Arguments Order
=========================
Until PHP 8.0, it was possible to call implode() with a random order of argument : string first, or array first. PHP would figure out which one to use. 



In PHP 8.0, it is now compulsory to put the string in the first place, as the types are checked. Or used named parameters.



PHP code
________
.. code-block:: php

   <?php
   
   print_r(implode([1,2], '3'));
   
   ?>

Before
______
.. code-block:: output

   PHP Deprecated:  implode(): Passing glue string after array is deprecated. Swap the parameters in /codes/imploderOrder.php on line 3
   
   Deprecated: implode(): Passing glue string after array is deprecated. Swap the parameters in /codes/imploderOrder.php on line 3
   132

After
______
.. code-block:: output

   PHP Fatal error:  Uncaught TypeError: implode(): Argument #2 ($array) must be of type ?array, string given in /codes/imploderOrder.php:3
   Stack trace:
   #0 /codes/imploderOrder.php(3): implode(Array, '3')
   #1 {main}
     thrown in /codes/imploderOrder.php on line 3
   
   Fatal error: Uncaught TypeError: implode(): Argument #2 ($array) must be of type ?array, string given in /codes/imploderOrder.php:3
   Stack trace:
   #0 /codes/imploderOrder.php(3): implode(Array, '3')
   #1 {main}
     thrown in /codes/imploderOrder.php on line 3
   


PHP version change
__________________
This behavior changed in 8.0


Error Messages
______________

implode(): Argument #2 ($array) must be of type ?array, string given


