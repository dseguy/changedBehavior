.. _`typed-class-constant`:

Typed Class Constant
====================
Support for typed class constants was added in PHP 8.3

PHP code
________
.. code-block:: php

   <?php
   
   class x {
       public int A = 1;
   }
   
   echo X::A;
   
   ?>

Before
______
.. code-block:: output

   Parse error: syntax error, unexpected identifier A, expecting variable

After
______
.. code-block:: output

   1


PHP version change: 8.3

See Also
________

* `Class Constants <https://www.php.net/manual/en/language.oop5.constants.php>`_


