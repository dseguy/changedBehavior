.. _`ksort()-now-places-integers-before-strings`:

ksort() Now Places Integers Before Strings
==========================================
.. meta::
	:description:
		ksort() Now Places Integers Before Strings: ksort() used the PHP 7 way to compare values: then, strings would rank below integers, in particular below 0.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: ksort() Now Places Integers Before Strings
	:twitter:description: ksort() Now Places Integers Before Strings: ksort() used the PHP 7 way to compare values: then, strings would rank below integers, in particular below 0
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: ksort() Now Places Integers Before Strings
	:og:type: article
	:og:description: ksort() used the PHP 7 way to compare values: then, strings would rank below integers, in particular below 0
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/ksort.html
	:og:locale: en

ksort() used the PHP 7 way to compare values: then, strings would rank below integers, in particular below 0. 



In PHP 8.2, strings are now ranking above integers, and are moved to the end of the sorted array. This is related to the change of rules in comparisons.

PHP code
________
.. code-block:: php

   <?php
   
   $x = array('a' => 1, 
              0 => 2, 
              1 => 3, 
              '0' => 4,
   );
   ksort($x);
   print_r($x);
   ?>

Before
______
.. code-block:: output

   Array
   (
       [a] => 1
       [0] => 4
       [1] => 3
   )
   

After
______
.. code-block:: output

   Array
   (
       [0] => 4
       [1] => 3
       [a] => 1
   )
   


PHP version change
__________________
This behavior changed in 8.2


Error Messages
______________

  + `0 <https://php-errors.readthedocs.io/en/latest/messages/.html>`_



