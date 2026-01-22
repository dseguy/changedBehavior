.. _sorting-closure-must-return-integers:

Sorting Closure Must Return Integers
====================================
.. meta::
	:description:
		Sorting Closure Must Return Integers: Comparison closures used in custom sorting need to return an integer, while they used to yield true or false.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Sorting Closure Must Return Integers
	:twitter:description: Sorting Closure Must Return Integers: Comparison closures used in custom sorting need to return an integer, while they used to yield true or false
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Sorting Closure Must Return Integers
	:og:type: article
	:og:description: Comparison closures used in custom sorting need to return an integer, while they used to yield true or false
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/sortClosureReturnType.html
	:og:locale: en

Comparison closures used in custom sorting need to return an integer, while they used to yield true or false. This applies to all custom sorting functions, including usort(), uasort(), and uksort().



There is no performance penalty nor gain with the usage of that returntype.

PHP code
________
.. code-block:: php

   <?php
   
   $array = [1, 2, 3];
   
   // Replace
   usort($array, fn($a, $b) : bool => $a > $b);
   // With
   usort($array, fn($a, $b) : int => $a <=> $b);
   
   print_r($array);
   ?>

Before
______
.. code-block:: output

   Array
   (
       [0] => 1
       [1] => 2
       [2] => 3
   )
   

After
______
.. code-block:: output

   PHP Deprecated:  usort(): Returning bool from comparison function is deprecated, return an integer less than, equal to, or greater than zero
   
   Deprecated: usort(): Returning bool from comparison function is deprecated, return an integer less than, equal to, or greater than zero
   Array
   (
       [0] => 1
       [1] => 2
       [2] => 3
   )
   


PHP version change
__________________
This behavior was deprecated in 8.0

This behavior changed in 9.0


Error Messages
______________

  + `usort(): Returning bool from comparison function is deprecated, return an integer less than, equal to, or greater than zero <https://php-errors.readthedocs.io/en/latest/messages/returning-bool-from-comparison-function-is-deprecated%2C-return-an-integer-less-than%2C-equal-to%2C-or-greater-than-zero.html>`_



