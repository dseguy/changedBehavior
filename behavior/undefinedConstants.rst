.. _`undefined-constants`:

Undefined Constants
===================
Undefined global constants used to fallback to their equivalent string. It would keep the execution going, too. In PHP 8.0, such mistake is a Fatal Error

PHP code
________
.. code-block:: php

   <?php
   
   echo D;
   
   ?>

Before
______
.. code-block:: output

   D

After
______
.. code-block:: output

   Uncaught Error: Undefined constant "D"


PHP version change
__________________
This behavior was deprecated in 7.0

This behavior changed in 8.0


Error Messages
______________

`Uncaught Error: Undefined constant "D" <https://php-errors.readthedocs.io/en/latest/messages/uncaught-error:-undefined-constant-"d".html>`_



