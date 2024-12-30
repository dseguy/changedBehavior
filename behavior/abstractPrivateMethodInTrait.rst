.. _`no-abstract-private-method-in-traits`:

No Abstract Private Method In Traits
====================================
Until PHP 8.0, it was not possible to have abstract private methods in a trait. There was a conflict between the ``abstract``, which required a definition in a child, and ``private`` which prevented it. 



This was resolved in PHP 8.0 and later.

PHP code
________
.. code-block:: php

   <?php
   
   trait t { abstract private function foo() ;}
   
   print_r(get_declared_traits());
   
   ?>

Before
______
.. code-block:: output

   PHP Fatal error:  Abstract function t::foo() cannot be declared private in /codes/abstractPrivateMethodInTrait.php on line 3
   
   Fatal error: Abstract function t::foo() cannot be declared private in /codes/abstractPrivateMethodInTrait.php on line 3
   

After
______
.. code-block:: output

   Array
   (
       [0] => t
   )
   


PHP version change
__________________
This behavior changed in 8.0


