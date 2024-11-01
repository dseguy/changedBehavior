.. _`unpack-arrays-in-arrays`:

Unpack Arrays In Arrays
=======================
The ellipsis operator can now be used in arrays, with an effect similar to array_merge(). In particular, the string keys are now supported.

PHP code
________
.. code-block:: php

   <?php
   
   $array = [...['a' => 'foo'], ...['b' => 'bar']];
   
   print_r($array);
   
   ?>

Before
______
.. code-block:: output

   PHP Fatal error:  Cannot unpack array with string keys in /codes/unpack_arrays.php on line 3
   
   Fatal error: Cannot unpack array with string keys in /codes/unpack_arrays.php on line 3
   

After
______
.. code-block:: output

   Array
   (
       [a] => foo
       [b] => bar
   )
   


PHP version change
__________________
This behavior changed in 8.1


Error Messages
______________

  + `Cannot unpack array with string keys <https://php-errors.readthedocs.io/en/latest/messages/cannot-unpack-array-with-string-keys.html>`_



