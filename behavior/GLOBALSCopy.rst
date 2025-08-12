.. _`copy-of-$globals`:

Copy Of $GLOBALS
================
.. meta::
	:description:
		Copy Of $GLOBALS: Until PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Copy Of $GLOBALS
	:twitter:description: Copy Of $GLOBALS: Until PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Copy Of $GLOBALS
	:og:type: article
	:og:description: Until PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/GLOBALSCopy.html
	:og:locale: en

Until PHP 8.1, copying $GLOBALS into another variable was made by reference: modifying the values in the copy was also modifying the original. Since PHP 8.1, the copy is a copy by value.

PHP code
________
.. code-block:: php

   <?php
   $a = 1;
   
   $globals = $GLOBALS; // Ostensibly by-value copy
   $globals['a'] = 2;
   var_dump($a); // int(2)
   ?>

Before
______
.. code-block:: output

   int(2)
   

After
______
.. code-block:: output

   int(1)
   


PHP version change
__________________
This behavior changed in 8.1


