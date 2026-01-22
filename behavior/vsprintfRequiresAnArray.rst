.. _vsprint()-requires-an-array:

vsprint() Requires An Array
===========================
.. meta::
	:description:
		vsprint() Requires An Array: vsprint() used to skip argument type validation, and wrongly report missing arguments, when the last argument was not a array.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: vsprint() Requires An Array
	:twitter:description: vsprint() Requires An Array: vsprint() used to skip argument type validation, and wrongly report missing arguments, when the last argument was not a array
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: vsprint() Requires An Array
	:og:type: article
	:og:description: vsprint() used to skip argument type validation, and wrongly report missing arguments, when the last argument was not a array
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/vsprintfRequiresAnArray.html
	:og:locale: en

vsprint() used to skip argument type validation, and wrongly report missing arguments, when the last argument was not a array. Since PHP 8.0, the error message is clear.

PHP code
________
.. code-block:: php

   <?php
   
   print vsprintf('%04d-%02d-%02d', 1);
   vprintf('%04d-%02d-%02d', 1);
   
   ?>

Before
______
.. code-block:: output

   vsprintf(): Too few arguments

After
______
.. code-block:: output

   vsprintf(): Argument #2 ($values) must be of type array, int given


PHP version change
__________________
This behavior changed in 8.0


Error Messages
______________

  + `Too few arguments <https://php-errors.readthedocs.io/en/latest/messages/too-few-arguments.html>`_
  + `Argument #%d ($%s) must be of type %s, %s given <https://php-errors.readthedocs.io/en/latest/messages/argument-%23%25d-%28%24%25s%29-must-be-of-type-%25s%2C-%25s-given.html>`_



