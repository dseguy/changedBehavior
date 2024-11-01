.. _`unpack-array-with-string-keys`:

Unpack Array With String Keys
=============================
In PHP 7.4, the ellipsis operator was introduced to unpack arrays. Initially, it only supported integer keys, and not string keys. This was introduced in PHP 8.0.

PHP code
________
.. code-block:: php

   <?php
   
   $array = ['a' => 1];
   
   foo(...$array);
   
   function foo($a) {
   	echo $a;
   }
   
   ?>

Before
______
.. code-block:: output

   PHP Fatal error:  Uncaught Error: Cannot unpack array with string keys in /codes/ellipsis_and_named_arguments.php:5
   Stack trace:
   #0 {main}
     thrown in /codes/ellipsis_and_named_arguments.php on line 5
   
   Fatal error: Uncaught Error: Cannot unpack array with string keys in /codes/ellipsis_and_named_arguments.php:5
   Stack trace:
   #0 {main}
     thrown in /codes/ellipsis_and_named_arguments.php on line 5
   

After
______
.. code-block:: output

   1


PHP version change
__________________
This behavior changed in 8.0


Error Messages
______________

  + `Cannot unpack array with string keys <https://php-errors.readthedocs.io/en/latest/messages/cannot-unpack-array-with-string-keys.html>`_



