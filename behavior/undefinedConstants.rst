.. _`undefined-constants`:

Undefined Constants
===================
.. meta::
	:description:
		Undefined Constants: Undefined global constants used to fallback to their equivalent string.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Undefined Constants
	:twitter:description: Undefined Constants: Undefined global constants used to fallback to their equivalent string
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Undefined Constants
	:og:type: article
	:og:description: Undefined global constants used to fallback to their equivalent string
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/undefinedConstants.html
	:og:locale: en

Undefined global constants used to fallback to their equivalent string. It would keep the execution going, too. In PHP 8.0, such mistake is a Fatal Error

PHP code
________
.. code-block:: php

   <?php
   
   echo D;
   
   ?>

Before
______
.. code-block:: output

   D

After
______
.. code-block:: output

   Uncaught Error: Undefined constant "D"


PHP version change
__________________
This behavior was deprecated in 7.0

This behavior changed in 8.0


Analyzer
_________

  + `Constants/UndefinedConstants <https://exakat.readthedocs.io/en/latest/Reference/Rules/Constants/UndefinedConstants.html>`_



