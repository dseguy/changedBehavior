.. _`str_replace()-checks-for-arguments`:

str_replace() Checks For Arguments
==================================
.. meta::
	:description:
		str_replace() Checks For Arguments: str_replace() can replace a string with another string.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: str_replace() Checks For Arguments
	:twitter:description: str_replace() Checks For Arguments: str_replace() can replace a string with another string
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: str_replace() Checks For Arguments
	:og:type: article
	:og:description: str_replace() can replace a string with another string
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/str_replaceChecksArguments.html
	:og:locale: en

str_replace() can replace a string with another string; an array of strings with another array of strings, with a one to one relationship; or an array of strings with a single string, where all of the searched strings are replaced with the same target string. Yet, it is not possible to replace one string by an array of strings, as they are not of the same type, and PHP would need to choose one of the target strings.

This is an example of conditional typing : the type of one of the arguments depends on the type of the other argument.

PHP code
________
.. code-block:: php

   <?php
   
   print str_replace( array('b', 'c'), 'a', 'abc');
   ?>

Before
______
.. code-block:: output

   Notice: Array to string conversion in /in/GhW96 on line 3
   Arraybc

After
______
.. code-block:: output

   Uncaught TypeError: str_replace(): Argument #2 ($replace) must be of type string when argument #1


PHP version change
__________________
This behavior changed in 8.0


