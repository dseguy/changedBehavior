.. _`jsonserialize-must-have-return-type`:

jsonSerialize Must Have Return Type
===================================
.. meta::
	:description:
		jsonSerialize Must Have Return Type: Until PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: jsonSerialize Must Have Return Type
	:twitter:description: jsonSerialize Must Have Return Type: Until PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: jsonSerialize Must Have Return Type
	:og:type: article
	:og:description: Until PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/jsonSerialize.html
	:og:locale: en

Until PHP 8.1, PHP would not enforce the type compatibility between a native interface and its custom implementation. This was for backward compatibility, and it is now over: PHP checks for type compatibility.



If making the returntype mixed or compatible is not possible at the moment, it is possible to use the ``ReturnTypeWillChange`` attribute to avoid this error message until it is actually fixed.



This affects all PHP native interfaces, and jsonSerialize is the most frequent to be reported.



PHP code
________
.. code-block:: php

   <?php
   
   class x implements JsonSerializable {
   	function __construct() { echo __METHOD__; }
   	function jsonSerialize() {}
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

   PHP Deprecated:  Return type of x::jsonSerialize() should either be compatible with JsonSerializable::jsonSerialize(): mixed, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice in /codes/jsonSerialize.php on line 5
   
   Deprecated: Return type of x::jsonSerialize() should either be compatible with JsonSerializable::jsonSerialize(): mixed, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice in /codes/jsonSerialize.php on line 5
   x::__construct


PHP version change
__________________
This behavior changed in 8.1


Error Messages
______________

  + `Return type of x::jsonSerialize() should either be compatible with JsonSerializable::jsonSerialize(): mixed, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice <https://php-errors.readthedocs.io/en/latest/messages/return-type-of-%25s%3A%3A%25s%28%29-should-either-be-compatible-with-%25s%3A%3A%25s%28%29%3A-mixed.html>`_



