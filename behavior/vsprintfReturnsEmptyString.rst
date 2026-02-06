.. _vsprintf()-returns-empty-string-on-error:

vsprintf() Returns Empty String On Error
========================================
.. meta::
	:description:
		vsprintf() Returns Empty String On Error: ``vsprintf()`` always returns a string, or raises an exception.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: vsprintf() Returns Empty String On Error
	:twitter:description: vsprintf() Returns Empty String On Error: ``vsprintf()`` always returns a string, or raises an exception
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: vsprintf() Returns Empty String On Error
	:og:type: article
	:og:description: ``vsprintf()`` always returns a string, or raises an exception
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/vsprintfReturnsEmptyString.html
	:og:locale: en

``vsprintf()`` always returns a string, or raises an exception. Until PHP 8.0, it used to return ``false`` in case of error. Errors include having insufficient arguments in the second argument's array.

PHP code
________
.. code-block:: php

   <?php
   
   var_dump(vsprintf("%04d-%02d-%02d", []));
   
   ?>

Before
______
.. code-block:: output

   Warning: vsprintf(): Too few arguments in /in/1pYdW on line 3
   bool(false)

After
______
.. code-block:: output

   Fatal error: Uncaught ValueError: The arguments array must contain 3 items, 0 given


PHP version change
__________________
This behavior changed in 8.0


Error Messages
______________

  + `The arguments array must contain %d items, %d given <https://php-errors.readthedocs.io/en/latest/messages/the-arguments-array-must-contain-%25d-items%2C-%25d-given.html>`_



