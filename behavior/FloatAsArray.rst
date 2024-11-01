.. _`float-used-as-array`:

Float Used As Array
===================
Integer is not an array, but it is possible to use the array syntax with it. The values are then always ``null``, and since PHP 7.4, a warning is emitted.

PHP code
________
.. code-block:: php

   <?php
   
   var_dump(456[0]);
   
   $a = 456;
   var_dump($a['dsds']);
   
   
   ?>

Before
______
.. code-block:: output

   NULL

After
______
.. code-block:: output

   PHP Warning:  Trying to access array offset on integer
   
   Warning: Trying to access array offset on integer
   NULL


PHP version change
__________________
This behavior changed in 7.4


Error Messages
______________

  + `Trying to access array offset on %s <https://php-errors.readthedocs.io/en/latest/messages/Trying to access array offset on %s.html>`_



