.. _`no-max()-on-empty-array`:

No Max() On Empty Array
=======================
max() does not accept an empty array as argument. In that case, it used to return NULL, but NULL is also a valid return value, and it is not possible to differentiate between the NULL of an empty array and the NULL that is really a maximum value. 

PHP code
________
.. code-block:: php

   <?php
   
   max([]);
   
   ?>
   

Before
______
.. code-block:: output

   PHP Warning:  max(): Array must contain at least one element in /codes/maxOnEmpty.php on line 3
   
   Warning: max(): Array must contain at least one element in /codes/maxOnEmpty.php on line 3
   

After
______
.. code-block:: output

   PHP Fatal error:  Uncaught ValueError: max(): Argument #1 ($value) must contain at least one element in /codes/maxOnEmpty.php:3
   Stack trace:
   #0 /codes/maxOnEmpty.php(3): max(Array)
   #1 {main}
     thrown in /codes/maxOnEmpty.php on line 3
   
   Fatal error: Uncaught ValueError: max(): Argument #1 ($value) must contain at least one element in /codes/maxOnEmpty.php:3
   Stack trace:
   #0 /codes/maxOnEmpty.php(3): max(Array)
   #1 {main}
     thrown in /codes/maxOnEmpty.php on line 3
   


PHP version change
__________________
This behavior changed in 8.0


Error Messages
______________

Array must contain at least one element


