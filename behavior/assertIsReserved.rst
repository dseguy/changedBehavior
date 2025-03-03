.. _`assert-is-reserved-function`:

assert Is Reserved Function
===========================
.. meta::
	:description:
		assert Is Reserved Function: It is not possible to create a function named ``assert`` anymore in PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: assert Is Reserved Function
	:twitter:description: assert Is Reserved Function: It is not possible to create a function named ``assert`` anymore in PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: assert Is Reserved Function
	:og:type: article
	:og:description: It is not possible to create a function named ``assert`` anymore in PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/assertIsReserved.html
	:og:locale: en

It is not possible to create a function named ``assert`` anymore in PHP 8.0. This applies to every scopes, global or custom. 



Until PHP 8.0, it was possible.



PHP code
________
.. code-block:: php

   <?php
   
   function assert() {}
   
   ?>

Before
______
.. code-block:: output

   PHP Deprecated:  Defining a custom assert() function is deprecated, as the function has special semantics in /codes/assertIsReserved.php on line 3
   
   Deprecated: Defining a custom assert() function is deprecated, as the function has special semantics in /codes/assertIsReserved.php on line 3
   PHP Fatal error:  Cannot redeclare assert() in /codes/assertIsReserved.php on line 3
   
   Fatal error: Cannot redeclare assert() in /codes/assertIsReserved.php on line 3
   

After
______
.. code-block:: output

   PHP Fatal error:  Defining a custom assert() function is not allowed, as the function has special semantics in /codes/assertIsReserved.php on line 3
   
   Fatal error: Defining a custom assert() function is not allowed, as the function has special semantics in /codes/assertIsReserved.php on line 3
   


PHP version change
__________________
This behavior was deprecated in 7.4

This behavior changed in 8.0


