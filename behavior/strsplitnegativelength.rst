.. _`str_split()-throws-valueerror-with-negative-lengths`:

str_split() Throws ValueError With Negative Lengths
===================================================
.. meta::
	:description:
		str_split() Throws ValueError With Negative Lengths: str_split() used to emit a warning and return false, when provided with length (2nd argument) as an integer less then 1.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: str_split() Throws ValueError With Negative Lengths
	:twitter:description: str_split() Throws ValueError With Negative Lengths: str_split() used to emit a warning and return false, when provided with length (2nd argument) as an integer less then 1
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: str_split() Throws ValueError With Negative Lengths
	:og:type: article
	:og:description: str_split() used to emit a warning and return false, when provided with length (2nd argument) as an integer less then 1
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/strsplitnegativelength.html
	:og:locale: en

str_split() used to emit a warning and return false, when provided with length (2nd argument) as an integer less then 1. In PHP 8.0, it now throws a ValueError.

PHP code
________
.. code-block:: php

   <?php
   str_split('abc', 0);
   ?>

Before
______
.. code-block:: output

   Warning: str_split(): The length of each segment must be greater than zero

After
______
.. code-block:: output

   Fatal error: Uncaught ValueError: str_split(): Argument #2 ($length) must be greater than 0


PHP version change
__________________
This behavior changed in 8.0


