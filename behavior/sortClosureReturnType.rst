.. _`sorting-closure-must-return-integers`:

Sorting Closure Must Return Integers
====================================
.. meta::
	:description:
		Sorting Closure Must Return Integers: Comparison closures used in custom sorting need to return an integer, while they could yield true or false.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Sorting Closure Must Return Integers
	:twitter:description: Sorting Closure Must Return Integers: Comparison closures used in custom sorting need to return an integer, while they could yield true or false
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Sorting Closure Must Return Integers
	:og:type: article
	:og:description: Comparison closures used in custom sorting need to return an integer, while they could yield true or false
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/sortClosureReturnType.html
	:og:locale: en

Comparison closures used in custom sorting need to return an integer, while they could yield true or false. This applies to all sorting functions, including usort(), uasort(), and uksort().

PHP code
________
.. code-block:: php

   <?php
   
   $array = [1, 2, 3];
   
   // Replace
   usort($array, fn($a, $b) => $a > $b);
   // With
   usort($array, fn($a, $b) => $a <=> $b);
   
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

   PHP Deprecated:  usort(): Returning bool from comparison function is deprecated, return an integer less than, equal to, or greater than zero in /codes/sortClosureReturnType.php on line 6
   
   Deprecated: usort(): Returning bool from comparison function is deprecated, return an integer less than, equal to, or greater than zero in /codes/sortClosureReturnType.php on line 6
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



