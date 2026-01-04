.. _`cannot-call-traits-methods-directly`:

Cannot Call Traits Methods Directly
===================================
.. meta::
	:description:
		Cannot Call Traits Methods Directly: Traits used to be called directly, like a class.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot Call Traits Methods Directly
	:twitter:description: Cannot Call Traits Methods Directly: Traits used to be called directly, like a class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Cannot Call Traits Methods Directly
	:og:type: article
	:og:description: Traits used to be called directly, like a class
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/callTraitAlone.html
	:og:locale: en

Traits used to be called directly, like a class. In PHP 8.1, this feature has been removed. The methods, properties or constants of the trait must be called in the context of their host class.

PHP code
________
.. code-block:: php

   <?php
   
   trait T {
       static function foo() { echo __METHOD__; }
   }
   
   echo T::foo();
   
   ?>

Before
______
.. code-block:: output

   t::foo

After
______
.. code-block:: output

   PHP Deprecated:  Calling static trait method t::foo is deprecated, it should only be called on a class using the trait
   
   Deprecated: Calling static trait method t::foo is deprecated, it should only be called on a class using the trait
   t::foo


PHP version change
__________________
This behavior was deprecated in 8.1

This behavior changed in 9.0


Analyzer
_________

  + `Traits/CannotCallTraitMethod <https://exakat.readthedocs.io/en/latest/Reference/Rules/Traits/CannotCallTraitMethod.html>`_



