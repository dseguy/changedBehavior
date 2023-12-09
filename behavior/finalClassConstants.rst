.. _`final-class-constants`:

Final Class Constants
=====================
Class constants can be made final, starting with PHP 8.2.

PHP code
________
.. code-block:: php

   <?php
   
   class x {
   	final public const A = 1;
   }
   
   echo x::A;
   
   ?>

Before
______
.. code-block:: output

   PHP Fatal error:  Cannot use 'final' as constant modifier 

After
______
.. code-block:: output

   1


PHP version change: 8.1

