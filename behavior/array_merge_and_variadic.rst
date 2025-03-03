.. _`array_merge()-and-variadic`:

array_merge() And Variadic
==========================
.. meta::
	:description:
		array_merge() And Variadic: Until PHP 7.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: array_merge() And Variadic
	:twitter:description: array_merge() And Variadic: Until PHP 7
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: array_merge() And Variadic
	:og:type: article
	:og:description: Until PHP 7
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/array_merge_and_variadic.html
	:og:locale: en

Until PHP 7.4, array_merge() always needed at least one argument to execute. This means that using the variadic operator on an empty array yielded no argument, and then, an error.



Since PHP 7.4, array_merge() handles graciously the case of no arguments, by returning an empty array, and not more error.



This applies to array_merge() and array_merge_recursive().

PHP code
________
.. code-block:: php

   <?php
   
   $array = [];
   
   $array2 = array_merge(...$array);
   
   print_r($array2);
   
   ?>

Before
______
.. code-block:: output

   PHP Warning:  array_merge() expects at least 1 parameter, 0 given in /codes/array_merge_and_variadic.php on line 5
   
   Warning: array_merge() expects at least 1 parameter, 0 given in /codes/array_merge_and_variadic.php on line 5
   

After
______
.. code-block:: output

   Array
   (
   )
   


PHP version change
__________________
This behavior changed in 7.4


