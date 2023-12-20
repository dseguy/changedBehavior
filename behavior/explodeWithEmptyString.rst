.. _`explode()-forbids-empty-strings`:

explode() Forbids Empty Strings
===============================
explode() doesn't work on empty strings, as delimiter (first argument). It used to be a warning and a returned value of false, it is now a Fatal error. 

PHP code
________
.. code-block:: php

   <?php
   
   explode('', 'abc');
   
   ?>

Before
______
.. code-block:: output

   PHP Warning:  explode(): Empty delimiter in /codes/explodeWithEmptyString.php on line 3
   
   Warning: explode(): Empty delimiter in /codes/explodeWithEmptyString.php on line 3
   

After
______
.. code-block:: output

   PHP Fatal error:  Uncaught ValueError: explode(): Argument #1 ($separator) cannot be empty in /codes/explodeWithEmptyString.php:3
   Stack trace:
   #0 /codes/explodeWithEmptyString.php(3): explode('', 'abc')
   #1 {main}
     thrown in /codes/explodeWithEmptyString.php on line 3
   
   Fatal error: Uncaught ValueError: explode(): Argument #1 ($separator) cannot be empty in /codes/explodeWithEmptyString.php:3
   Stack trace:
   #0 /codes/explodeWithEmptyString.php(3): explode('', 'abc')
   #1 {main}
     thrown in /codes/explodeWithEmptyString.php on line 3
   


PHP version change
__________________
This behavior changed in 8.0


See Also
________

* `explode <https://www.php.net/manual/en/function.explode.php>`_


