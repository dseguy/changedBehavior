.. _string-increments:

String Increments
=================
.. meta::
	:description:
		String Increments: String increments are the ``++`` operator applied to a string.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: String Increments
	:twitter:description: String Increments: String increments are the ``++`` operator applied to a string
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: String Increments
	:og:type: article
	:og:description: String increments are the ``++`` operator applied to a string
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/stringIncrement.html
	:og:locale: en

String increments are the ``++`` operator applied to a string. The last character is updated to the next one in ASCII order, with a wrap up after ``z``. This feature was deprecated in PHP 8.3, and the ``str_increment()`` and ``str_decrement()`` functions are introduced to replace it.

PHP code
________
.. code-block:: php

   <?php
   
   $a = 'abc';
   // $a = 'ab!';
   // in PHP 8.4, the last char must be non-alpha numeric to emit the warning
   $a++;
   
   echo $a;
   
   ?>

Before
______
.. code-block:: output

   abd

After
______
.. code-block:: output

   PHP Deprecated:  Increment on non-alphanumeric string is deprecated
   
   abds


PHP version change
__________________
This behavior changed in 5.6


Error Messages
______________

  + `Increment on non-alphanumeric string is deprecated <https://php-errors.readthedocs.io/en/latest/messages/increment-on-non-alphanumeric-string-is-deprecated.html>`_



