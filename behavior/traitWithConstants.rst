.. _`constants-in-traits`:

Constants In Traits
===================
Constants are allowed in traits in PHP 8.3 and more recent. Until then, they were not supported.

PHP code
________
.. code-block:: php

   <?php
   
   trait t {
       const A = 1;
   }
   
   class x {
   
   use t;
   }
   
   echo X::A;
   ?>

Before
______
.. code-block:: output

   PHP Fatal error:  Traits cannot have constants

After
______
.. code-block:: output

   1


PHP version change: 8.2

