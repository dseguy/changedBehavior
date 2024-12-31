.. _`sort()-places-integers-before-strings`:

sort() Places Integers Before Strings
=====================================
.. meta::
	:description:
		sort() Places Integers Before Strings: sort() used the PHP 7 way to compare values: then, strings would rank below integers, in particular below 0.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: sort() Places Integers Before Strings
	:twitter:description: sort() Places Integers Before Strings: sort() used the PHP 7 way to compare values: then, strings would rank below integers, in particular below 0
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: sort() Places Integers Before Strings
	:og:type: article
	:og:description: sort() used the PHP 7 way to compare values: then, strings would rank below integers, in particular below 0
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/sort.html
	:og:locale: en

sort() used the PHP 7 way to compare values: then, strings would rank below integers, in particular below 0. 



In PHP 8, strings are now ranking above integers, and are moved to the end of the sorted array. This is related to the change of rules in comparisons.

PHP code
________
.. code-block:: php

   <?php
   
   $x = array('a',
              0,
              1,
              '0',
   );
   sort($x);
   print_r($x);
   ?>

Before
______
.. code-block:: output

   Array
   (
       [0] => a
       [1] => 0
       [2] => 0
       [3] => 1
   )
   

After
______
.. code-block:: output

   Array
   (
       [0] => 0
       [1] => 0
       [2] => 1
       [3] => a
   )
   


PHP version change
__________________
This behavior changed in 8.0


