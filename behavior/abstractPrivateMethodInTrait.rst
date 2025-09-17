.. _`no-abstract-private-method-in-traits`:

No Abstract Private Method In Traits
====================================
.. meta::
	:description:
		No Abstract Private Method In Traits: Until PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: No Abstract Private Method In Traits
	:twitter:description: No Abstract Private Method In Traits: Until PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: No Abstract Private Method In Traits
	:og:type: article
	:og:description: Until PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/abstractPrivateMethodInTrait.html
	:og:locale: en

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

   PHP Fatal error:  Abstract function t::foo() cannot be declared private
   
   Fatal error: Abstract function t::foo() cannot be declared private
   

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


Error Messages
______________

  + `0 <https://php-errors.readthedocs.io/en/latest/messages/.html>`_


Analyzer
_________

  + `Traits/NoPrivateAbstract <https://exakat.readthedocs.io/en/latest/Reference/Rules/Traits/NoPrivateAbstract.html>`_



