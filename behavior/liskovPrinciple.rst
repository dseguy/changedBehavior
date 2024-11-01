.. _`covariance-and-contravariance-are-fatal`:

Covariance And Contravariance Are Fatal
=======================================
Type mismatch between signatures of the same method in different classes of the same hierarchy used to be a warning. It is not a fatal error, altought it is only checked at execution time, when all the classes are loaded.

PHP code
________
.. code-block:: php

   <?php
   
   class Foo {
       public function process(stdClass $item): array{}
   }
   
   class SuperFoo extends Foo{
       public function process(array $items): array{}
       //                      ^^^^^ mismatch
   }
   
   ?>

Before
______
.. code-block:: output

   PHP Warning:  Declaration of SuperFoo::process(array $items): array should be compatible with Foo::process(stdClass $item): array in /codes/liskovPrinciple.php on line 8
   
   Warning: Declaration of SuperFoo::process(array $items): array should be compatible with Foo::process(stdClass $item): array in /codes/liskovPrinciple.php on line 8
   

After
______
.. code-block:: output

   PHP Fatal error:  Declaration of SuperFoo::process(array $items): array must be compatible with Foo::process(stdClass $item): array in /codes/liskovPrinciple.php on line 8
   
   Fatal error: Declaration of SuperFoo::process(array $items): array must be compatible with Foo::process(stdClass $item): array in /codes/liskovPrinciple.php on line 8
   


PHP version change
__________________
This behavior changed in 8.0


Error Messages
______________

  + `Declaration of SuperFoo::process(array $items): array should be compatible with Foo::process(stdClass $item): array <https://php-errors.readthedocs.io/en/latest/messages/Declaration of SuperFoo::process(array $items): array should be compatible with Foo::process(stdClass $item): array.html>`_



