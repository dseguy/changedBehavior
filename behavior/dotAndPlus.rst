.. _`dot-and-plus-changed-precedence`:

Dot And Plus Changed Precedence
===============================
.. meta::
	:description:
		Dot And Plus Changed Precedence: The dot (concatenation) and addition + operators have a distinct priority in PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Dot And Plus Changed Precedence
	:twitter:description: Dot And Plus Changed Precedence: The dot (concatenation) and addition + operators have a distinct priority in PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Dot And Plus Changed Precedence
	:og:type: article
	:og:description: The dot (concatenation) and addition + operators have a distinct priority in PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/dotAndPlus.html
	:og:locale: en

The dot (concatenation) and addition + operators have a distinct priority in PHP 8.0. In particular, + has now precedence. 

PHP code
________
.. code-block:: php

   <?php
   
   echo 3 . 4 + 5;
   
   ?>

Before
______
.. code-block:: output

   PHP Deprecated:  The behavior of unparenthesized expressions containing both '.' and '+'/'-' will change in PHP 8: '+'/'-' will take a higher precedence in /codes/dotAndPlus.php on line 3
   
   Deprecated: The behavior of unparenthesized expressions containing both '.' and '+'/'-' will change in PHP 8: '+'/'-' will take a higher precedence in /codes/dotAndPlus.php on line 3
   39

After
______
.. code-block:: output

   39


PHP version change
__________________
This behavior was deprecated in 7.4

This behavior changed in 8.0


See Also
________

* `Migration PHP 8.0 <https://www.php.net/manual/en/migration80.incompatible.php>`_



