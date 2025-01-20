.. _`strpos()-with-integer-argument`:

strpos() With Integer Argument
==============================
.. meta::
	:description:
		strpos() With Integer Argument: strpos() used to accept integer arguments as second argument, ``$needle``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: strpos() With Integer Argument
	:twitter:description: strpos() With Integer Argument: strpos() used to accept integer arguments as second argument, ``$needle``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: strpos() With Integer Argument
	:og:type: article
	:og:description: strpos() used to accept integer arguments as second argument, ``$needle``
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/strposWithInteger.html
	:og:locale: en

strpos() used to accept integer arguments as second argument, ``$needle``. Then, PHP would turn the integer into the equivalent ASCII character, and look for that character.



Since PHP 8.0, it is not the case anymore. If the code requires such behavior, add a call to chr() or mb_chr() to convert the integer to an character, before searching for it.



PHP code
________
.. code-block:: php

   <?php
   
   var_dump(@strpos('abc', 98));
   
   ?>

Before
______
.. code-block:: output

   int(1)

After
______
.. code-block:: output

   false


PHP version change
__________________
This behavior changed in 8.0


