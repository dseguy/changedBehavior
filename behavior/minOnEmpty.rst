.. _`no-min()-on-empty-array`:

No min() On Empty Array
=======================
min() does not accept an empty array as argument. In that case, it used to return NULL, but NULL is also a valid return value, and it is not possible to differentiate between the NULL of an empty array and the NULL that is really a minimum value. 

PHP code
________
.. code-block:: php

   <?php
   
   min([]);
   
   ?>
   

Before
______
.. code-block:: output

   PHP Warning:  min(): Array must contain at least one element in /codes/minOnEmpty.php on line 3
   
   Warning: min(): Array must contain at least one element in odes/minOnEmpty.php on line 3
   

After
______
.. code-block:: output

   PHP Fatal error:  Uncaught ValueError: min(): Argument #1 ($value) must contain at least one element in codes/minOnEmpty.php:3
   Stack trace:
   #0 /codes/minOnEmpty.php(3): min(Array)
   #1 {main}
     thrown in /codes/minOnEmpty.php on line 3
   
   Fatal error: Uncaught ValueError: min(): Argument #1 ($value) must contain at least one element in codes/minOnEmpty.php:3
   Stack trace:
   #0 /codes/minOnEmpty.php(3): min(Array)
   #1 {main}
     thrown in /codes/minOnEmpty.php on line 3
   


PHP version change: 8.0

