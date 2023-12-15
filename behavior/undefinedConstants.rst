.. _`undefined-constants`:

Undefined Constants
===================
Undefined global constants used to fallback to their equivalent string. 

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


PHP version change: 8.0
Error Messages
______________

Uncaught Error: Undefined constant "D"


