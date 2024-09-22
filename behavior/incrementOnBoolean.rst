.. _`increment-on-boolean-is-deprecated`:

Increment On Boolean Is Deprecated
==================================
Incrementing or decrementing a boolean value had no effect. In PHP 8.3, it is now a deprecation warning, and a message.

PHP code
________
.. code-block:: php

   <?php
   
   $a = true;
   $a++;
   
   $b = false;
   --$b;
   echo $a, $b;
   
   ?>

Before
______
.. code-block:: output

   1

After
______
.. code-block:: output

   PHP Warning:  Increment on type bool has no effect, this will change in the next major version of PHP in /codes/incrementOnBoolean.php on line 4
   
   Warning: Increment on type bool has no effect, this will change in the next major version of PHP in /codes/incrementOnBoolean.php on line 4
   PHP Warning:  Decrement on type bool has no effect, this will change in the next major version of PHP in /codes/incrementOnBoolean.php on line 7
   
   Warning: Decrement on type bool has no effect, this will change in the next major version of PHP in /codes/incrementOnBoolean.php on line 7
   1


PHP version change
__________________
This behavior was deprecated in 8.3

This behavior changed in 9.0


Error Messages
______________

`Increment on type bool has no effect, this will change in the next major version of PHP <https://php-errors.readthedocs.io/en/latest/messages/increment-on-type-bool-has-no-effect,-this-will-change-in-the-next-major-version-of-php.html>`_



