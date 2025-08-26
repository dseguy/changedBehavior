.. _`yield-must-use-integer-or-string-keys`:

Yield Must Use Integer Or String Keys
=====================================
.. meta::
	:description:
		Yield Must Use Integer Or String Keys: A generator is unpacked as an array, and as such, it doesn't allow keys to be anything else but string or integer.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Yield Must Use Integer Or String Keys
	:twitter:description: Yield Must Use Integer Or String Keys: A generator is unpacked as an array, and as such, it doesn't allow keys to be anything else but string or integer
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Yield Must Use Integer Or String Keys
	:og:type: article
	:og:description: A generator is unpacked as an array, and as such, it doesn't allow keys to be anything else but string or integer
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/mustYieldIntOrStringKeys.html
	:og:locale: en

A generator is unpacked as an array, and as such, it doesn't allow keys to be anything else but string or integer. The generator may still be used in a foreach() structure, and yield usable keys, but it can't be unpacked or turned into a array without an error. In previous versions, the keys would be ignored, and re-indexed.

PHP code
________
.. code-block:: php

   <?php
   
   function foo(...$args) {
       var_dump($args);
   }
   function gen() {
       yield 1.23 => 123;
   }
   foo(...gen());
   
   ?>

Before
______
.. code-block:: output

   array(3) {
     [0]=>
     int(123)
     [1]=>
     int(123)
     [2]=>
     int(123)
   }

After
______
.. code-block:: output

   Fatal error: Uncaught Error: Keys must be of type int|string during argument unpacking


PHP version change
__________________
This behavior changed in 7.2


Error Messages
______________

  + `0 <https://php-errors.readthedocs.io/en/latest/messages/.html>`_



