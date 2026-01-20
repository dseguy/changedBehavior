.. _`unpack-array-with-string-keys`:

Unpack Array With String Keys
=============================
.. meta::
	:description:
		Unpack Array With String Keys: In PHP 7.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Unpack Array With String Keys
	:twitter:description: Unpack Array With String Keys: In PHP 7
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Unpack Array With String Keys
	:og:type: article
	:og:description: In PHP 7
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/unpack_arrays_with_strings.html
	:og:locale: en

In PHP 7.4, the ellipsis operator was introduced to unpack arrays. Initially, it only supported integer keys, and not string keys. This was introduced in PHP 8.0.

PHP code
________
.. code-block:: php

   <?php
   
   $array = ['a' => 1];
   
   foo(...$array);
   
   function foo($a) {
   	echo $a;
   }
   
   ?>

Before
______
.. code-block:: output

   PHP Fatal error:  Uncaught Error: Cannot unpack array with string keys
   
   Fatal error: Uncaught Error: Cannot unpack array with string keys
   

After
______
.. code-block:: output

   1


PHP version change
__________________
This behavior changed in 8.0


Error Messages
______________

  + `Cannot unpack array with string keys <https://php-errors.readthedocs.io/en/latest/messages/cannot-unpack-array-with-string-keys.html>`_


Analyzer
_________

  + `Structures/ArrayWithStringEllipsis <https://exakat.readthedocs.io/en/latest/Reference/Rules/Structures/ArrayWithStringEllipsis.html>`_



