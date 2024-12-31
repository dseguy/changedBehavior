.. _`enforcing-native-php-returntype`:

Enforcing Native PHP ReturnType
===============================
.. meta::
	:description:
		Enforcing Native PHP ReturnType: Until PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Enforcing Native PHP ReturnType
	:twitter:description: Enforcing Native PHP ReturnType: Until PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Enforcing Native PHP ReturnType
	:og:type: article
	:og:description: Until PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/enforceNativeReturnType.html
	:og:locale: en

Until PHP 8.0, PHP would not enforce the return types in its own interfaces. Incompatible signatures were possible. 



In PHP 8.1, such return type is now enforced. It should be set manually, or be temporarily suspended with the #[\ReturnTypeWillChange] attribute.

PHP code
________
.. code-block:: php

   <?php
   
   class x implements iterator {
   	function __construct() { echo __METHOD__; }
   	public current() {}
   }
   
   new x;
   
   ?>

Before
______
.. code-block:: output

   x::__construct

After
______
.. code-block:: output

   PHP Deprecated:  Return type of x::current() should either be compatible with Iterator::current(): mixed, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice in /codes/enforceNativeReturnType.php on line 5
   
   Deprecated: Return type of x::current() should either be compatible with Iterator::current(): mixed, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice in /codes/enforceNativeReturnType.php on line 5
   x::__construct


PHP version change
__________________
This behavior was deprecated in 8.1

This behavior changed in 9.0


Error Messages
______________

  + `Return type of x::current() should either be compatible with Iterator::current(): mixed, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice <https://php-errors.readthedocs.io/en/latest/messages/Return+type+of+x%3A%3Acurrent%28%29+should+either+be+compatible+with+Iterator%3A%3Acurrent%28%29%3A+mixed%2C+or+the+%23%5B%5CReturnTypeWillChange%5D+attribute+should+be+used+to+temporarily+suppress+the+notice.html>`_



