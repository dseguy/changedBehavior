.. _`version_compare()-stricter-operators`:

version_compare() Stricter Operators
====================================
version_compare() compares version strings, using an operator, passed as third parameter. Until PHP 8.3, unknown operators ignore it, and use the default value. 



Nowadays, it is generating a fatal error.

PHP code
________
.. code-block:: php

   <?php
   
   print version_compare('1.0', '2.3', '!');
   
   ?>

Before
______
.. code-block:: output

   1

After
______
.. code-block:: output

   PHP Fatal error:  Uncaught ValueError: version_compare(): Argument #3 ($operator) must be a valid comparison operator


PHP version change
__________________
This behavior changed in 8.1


