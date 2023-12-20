.. _`interface-constant-visibility-checks`:

Interface Constant Visibility Checks
====================================
PHP checks if the visibility of constants that are also part of an interface are all public. If the class constant, in the class, is not public, it is a Fatal Error. This was not checked until PHP 8.3.

PHP code
________
.. code-block:: php

   <?php
   
   interface i {
           public const I = 1;
           public const J = 2;
   }
   
   class x implements i {
           private const I = 1;
           public const J = 2;
   }
   
   print x::J;
   print x::I;
   ?>

Before
______
.. code-block:: output

   Cannot access private constant x::I

After
______
.. code-block:: output

   Access level to x::I must be public (as in interface i)


PHP version change
__________________
This behavior changed in 8.3


