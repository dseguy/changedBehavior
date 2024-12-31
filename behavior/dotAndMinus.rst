.. _`dot-and-minus-changed-precedence`:

Dot And Minus Changed Precedence
================================
.. meta::
	:description:
		Dot And Minus Changed Precedence: The dot (concatenation) and substraction - operators have a distinct priority in PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Dot And Minus Changed Precedence
	:twitter:description: Dot And Minus Changed Precedence: The dot (concatenation) and substraction - operators have a distinct priority in PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Dot And Minus Changed Precedence
	:og:type: article
	:og:description: The dot (concatenation) and substraction - operators have a distinct priority in PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/dotAndMinus.html
	:og:locale: en

The dot (concatenation) and substraction - operators have a distinct priority in PHP 8.0. In particular, - has now precedence. 

PHP code
________
.. code-block:: php

   <?php
   
   echo 3 . 4 - 5;
   
   ?>

Before
______
.. code-block:: output

   PHP Deprecated:  The behavior of unparenthesized expressions containing both '.' and '+'/'-' will change in PHP 8: '+'/'-' will take a higher precedence in /codes/dotAndMinus.php on line 3
   
   Deprecated: The behavior of unparenthesized expressions containing both '.' and '+'/'-' will change in PHP 8: '+'/'-' will take a higher precedence in /codes/dotAndMinus.php on line 3
   29

After
______
.. code-block:: output

   3-1


PHP version change
__________________
This behavior was deprecated in 7.4

This behavior changed in 8.0


See Also
________

* `Migration PHP 8.0 <https://www.php.net/manual/en/migration80.incompatible.php>`_


Error Messages
______________

  + `The behavior of unparenthesized expressions containing both '.' and '+'/'-' will change in PHP 8: '+'/'-' will take a higher precedence <https://php-errors.readthedocs.io/en/latest/messages/The+behavior+of+unparenthesized+expressions+containing+both+%27.%27+and+%27%2B%27%2F%27-%27+will+change+in+PHP+8%3A+%27%2B%27%2F%27-%27+will+take+a+higher+precedence.html>`_



