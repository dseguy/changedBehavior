.. _`accessing-trait-resources-directly-is-not-allowed`:

Accessing Trait Resources Directly Is Not Allowed
=================================================
It is not possible anymore to use traits just like a standalone class. As such, accessing methods, properties (and later constants) directly on the trait is not allowed anymore in PHP 8.1 and later. The feature might be removed in PHP 9.0.

Only static resources were accessible via the trait, as it is not possible to instantiate a trait without a class. 

PHP code
________
.. code-block:: php

   <?php
   
   trait t {
           static function foo() { print __METHOD__;}
           static $x = 'A';
   }
   
   echo T::foo();
   echo T::$x;
   
   ?>

Before
______
.. code-block:: output

   t::fooA

After
______
.. code-block:: output

   PHP Deprecated:  Calling static trait method t::foo is deprecated, it should only be called on a class using the trait in /codes/accessTraitsDirectly.php on line 8
   
   Deprecated: Calling static trait method t::foo is deprecated, it should only be called on a class using the trait in /codes/accessTraitsDirectly.php on line 8
   t::fooPHP Deprecated:  Accessing static trait property t::$x is deprecated, it should only be accessed on a class using the trait in /codes/accessTraitsDirectly.php on line 9
   
   Deprecated: Accessing static trait property t::$x is deprecated, it should only be accessed on a class using the trait in /codes/accessTraitsDirectly.php on line 9
   A


PHP version change: 9.0

