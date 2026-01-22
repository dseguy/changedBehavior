.. _covariance-and-contravariance-are-fatal:

Covariance And Contravariance Are Fatal
=======================================
.. meta::
	:description:
		Covariance And Contravariance Are Fatal: Type mismatch between signatures of the same method in different classes of the same hierarchy used to be a warning.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Covariance And Contravariance Are Fatal
	:twitter:description: Covariance And Contravariance Are Fatal: Type mismatch between signatures of the same method in different classes of the same hierarchy used to be a warning
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Covariance And Contravariance Are Fatal
	:og:type: article
	:og:description: Type mismatch between signatures of the same method in different classes of the same hierarchy used to be a warning
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/liskovPrinciple.html
	:og:locale: en

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

   PHP Warning:  Declaration of SuperFoo::process(array $items): array should be compatible with Foo::process(stdClass $item): array 
   
   Warning: Declaration of SuperFoo::process(array $items): array should be compatible with Foo::process(stdClass $item): array 
   

After
______
.. code-block:: output

   PHP Fatal error:  Declaration of SuperFoo::process(array $items): array must be compatible with Foo::process(stdClass $item): array 
   
   Fatal error: Declaration of SuperFoo::process(array $items): array must be compatible with Foo::process(stdClass $item): array 
   


PHP version change
__________________
This behavior changed in 8.0


Error Messages
______________

  + `Declaration of SuperFoo::process(array $items): array should be compatible with Foo::process(stdClass $item): array <https://php-errors.readthedocs.io/en/latest/messages/declaration-of-%25s-must-be-compatible-with-%25s.html>`_



