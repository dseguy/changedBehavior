.. _`max()-must-contain-at-least-one-element`:

max() Must Contain At Least One Element
=======================================
.. meta::
	:description:
		max() Must Contain At Least One Element: max() returns the largest value in the argument.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: max() Must Contain At Least One Element
	:twitter:description: max() Must Contain At Least One Element: max() returns the largest value in the argument
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: max() Must Contain At Least One Element
	:og:type: article
	:og:description: max() returns the largest value in the argument
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/maxOnEmptyArray.html
	:og:locale: en

max() returns the largest value in the argument. When that argument is an empty array, there is an ambiguity related to the returned value, as there is no such value. PHP would return ``null``, thought it is possible for max() to return ``null``. 



To be consistent, PHP emits an error on an empty array : it is not possible to get the maximum value when there are none.

PHP code
________
.. code-block:: php

   <?php
   
   try {
   	$a = max([]);
   } catch (\Error $e) {
   	print $e->getMessage();
   }
   
   var_dump($a);
   
   ?>

Before
______
.. code-block:: output

   PHP Warning:  max(): Array must contain at least one element in /codes/maxOnEmptyArray.php on line 4
   
   Warning: max(): Array must contain at least one element in /codes/maxOnEmptyArray.php on line 4
   bool(false)
   

After
______
.. code-block:: output

   max(): Argument #1 ($value) must contain at least one elementPHP Warning:  Undefined variable $a in /codes/maxOnEmptyArray.php on line 9
   
   Warning: Undefined variable $a in /codes/maxOnEmptyArray.php on line 9
   NULL
   


PHP version change
__________________
This behavior changed in 8.0



