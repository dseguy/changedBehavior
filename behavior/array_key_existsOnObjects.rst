.. _`array_key_exists()-doesn't-work-on-objects`:

array_key_exists() doesn't work on objects
==========================================
.. meta::
	:description:
		array_key_exists() doesn't work on objects: array_key_exists() used to accept arrays and objects, and worked on them indistinctly.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: array_key_exists() doesn't work on objects
	:twitter:description: array_key_exists() doesn't work on objects: array_key_exists() used to accept arrays and objects, and worked on them indistinctly
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: array_key_exists() doesn't work on objects
	:og:type: article
	:og:description: array_key_exists() used to accept arrays and objects, and worked on them indistinctly
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/array_key_existsOnObjects.html
	:og:locale: en

array_key_exists() used to accept arrays and objects, and worked on them indistinctly. 



Since PHP 8.0, array_key_exists() only works on arrays. Objects must be converted to arrays before usage.

PHP code
________
.. code-block:: php

   <?php
   
   var_dump(array_key_exists('a', (object) ['a' => 1]));
   
   ?>

Before
______
.. code-block:: output

   true

After
______
.. code-block:: output

   Fatal error


PHP version change
__________________
This behavior was deprecated in Using array_key_exists() on objects is deprecated. Use isset() or property_exists()

This behavior changed in 8.0


Error Messages
______________

  + `Uncaught TypeError: array_key_exists(): Argument #2 ($array) must be of type array, stdClass given <https://php-errors.readthedocs.io/en/latest/messages/array_key_exists%28%29%3A-argument-%232-%28%24array%29-must-be-of-type-array%2C-%25s-given.html>`_


Analyzer
_________

  + `Php/ArrayKeyExistsWithObjects <https://exakat.readthedocs.io/en/latest/Reference/Rules/Php/ArrayKeyExistsWithObjects.html>`_



