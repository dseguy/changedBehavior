.. _`boolean-used-as-array`:

Boolean Used As Array
=====================
Booleans, ``true`` and ``false`` are not an array, but it is possible to use the array syntax with it. The values are then always ``null``, and since PHP 7.4, a warning is emitted.

PHP code
________
.. code-block:: php

   <?php
   
   // var_dump(true[0]); is not a valid PHP syntax
   
   const MY_CONSTANT = true;
   var_dump(MY_CONSTANT[0]);
   
   ?>

Before
______
.. code-block:: output

   NULL

After
______
.. code-block:: output

   PHP Warning:  Trying to access array offset on true in /codes/nullAsArray.php on line 3
   
   Warning: Trying to access array offset on null in /codes/nullAsArray.php on line 3
   PHP


PHP version change
__________________
This behavior changed in 7.4


Error Messages
______________

`Trying to access array offset on %s <https://php-errors.readthedocs.io/en/latest/messages/trying-to-access-array-offset-on-%s.html>`_



