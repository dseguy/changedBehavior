.. _`constants-in-trait`:

Constants In Trait
==================
Trait can have constants in PHP 8.3 and later.

PHP code
________
.. code-block:: php

   <?php
   
   trait t {
       const X = 1;
       
   }
   
   class x {
   	use t;
   }
   
   echo X::X;

Before
______
.. code-block:: output

   PHP Fatal error:  Traits cannot have constants

After
______
.. code-block:: output

   1


PHP version change
__________________
This behavior changed in 8.3


