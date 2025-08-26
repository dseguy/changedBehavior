.. _`negative-offset-with-strings`:

Negative Offset With Strings
============================
.. meta::
	:description:
		Negative Offset With Strings: Negative offsets on strings were introduced in PHP 7.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Negative Offset With Strings
	:twitter:description: Negative Offset With Strings: Negative offsets on strings were introduced in PHP 7
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Negative Offset With Strings
	:og:type: article
	:og:description: Negative offsets on strings were introduced in PHP 7
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/negativeOffsetOnStrings.html
	:og:locale: en

Negative offsets on strings were introduced in PHP 7.1. They allow accessing individual characters, starting from the end of the string, rather than from the beginning.

PHP code
________
.. code-block:: php

   <?php
   
   $string = 'abc';
   
   echo $string[-1]; // c
   echo $string[1]; // a
   
   ?>

Before
______
.. code-block:: output

   PHP Notice:  Uninitialized string offset: -1 in /codes/negativeOffsetOnStrings.php on line 5
   
   Notice: Uninitialized string offset: -1 in /codes/negativeOffsetOnStrings.php on line 5
   b

After
______
.. code-block:: output

   cb


PHP version change
__________________
This behavior changed in 7.1


Error Messages
______________

  + `0 <https://php-errors.readthedocs.io/en/latest/messages/.html>`_



