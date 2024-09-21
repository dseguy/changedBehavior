.. _`null-used-as-array`:

Null Used As Array
==================
Null is not an array, but it is possible to use the array syntax with it. The values are then always ``null``, and since PHP 7.4, a warning is emitted.

PHP code
________
.. code-block:: php

   <?php
   
   var_dump(null[0]);
   
   var_dump(null['dsds']);
   
   
   ?>

Before
______
.. code-block:: output

   NULL

After
______
.. code-block:: output

   PHP Warning:  Trying to access array offset on null in /codes/nullAsArray.php on line 3
   
   Warning: Trying to access array offset on null in /codes/nullAsArray.php on line 3
   NULL


PHP version change
__________________
This behavior changed in 7.4


Error Messages
______________

Trying to access array offset on %s


