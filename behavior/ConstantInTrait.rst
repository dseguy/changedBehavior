.. _constants-in-trait:

Constants In Trait
==================
.. meta::
	:description:
		Constants In Trait: Trait can have constants in PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Constants In Trait
	:twitter:description: Constants In Trait: Trait can have constants in PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Constants In Trait
	:og:type: article
	:og:description: Trait can have constants in PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/ConstantInTrait.html
	:og:locale: en

Trait can have constants in PHP 8.3 and later. Until that version, constants cannot be set in traits, and end with a compilation error.

PHP code
________
.. code-block:: php

   <?php
   
   trait T {
       const X = 1;
   }
   
   class X {
   	use T;
   }
   
   echo X::X;
   
   ?>

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


Error Messages
______________

  + `Traits cannot have constants <https://php-errors.readthedocs.io/en/latest/messages/traits-cannot-have-constants.html>`_


Analyzer
_________

  + `Traits/ConstantsInTraits <https://exakat.readthedocs.io/en/latest/Reference/Rules/Traits/ConstantsInTraits.html>`_



