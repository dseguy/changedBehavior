.. _`enforcing-return-type-with-spl-classes`:

Enforcing Return Type With Spl Classes
======================================
.. meta::
	:description:
		Enforcing Return Type With Spl Classes: Until PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Enforcing Return Type With Spl Classes
	:twitter:description: Enforcing Return Type With Spl Classes: Until PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Enforcing Return Type With Spl Classes
	:og:type: article
	:og:description: Until PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/enforceSplReturnType.html
	:og:locale: en

Until PHP 8.1, the types of the methods that were related to SPL were not validated against their interfaced, as it is the case for other native or custom interfaces. 



In PHP 8.1, it is now enforced.

PHP code
________
.. code-block:: php

   <?php
   
   class X extends LimitIterator {
   	function __construct() { echo __METHOD__; }
   	public function current() {}
   }
   
   new X();
   
   ?>

Before
______
.. code-block:: output

   x::__construct
   

After
______
.. code-block:: output

   PHP Deprecated:  Return type of x::current() should either be compatible with IteratorIterator::current(): mixed, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice in /codes/enforceSplReturnType.php on line 5
   
   Deprecated: Return type of x::current() should either be compatible with IteratorIterator::current(): mixed, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice in /codes/enforceSplReturnType.php on line 5
   x::__construct
   


PHP version change
__________________
This behavior changed in 8.1


