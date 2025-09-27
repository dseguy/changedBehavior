.. _`strpos()-emits-valueerror`:

strpos() Emits ValueError
=========================
.. meta::
	:description:
		strpos() Emits ValueError: strpos() and stripos() emits a ValueError when the offset is out of range.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: strpos() Emits ValueError
	:twitter:description: strpos() Emits ValueError: strpos() and stripos() emits a ValueError when the offset is out of range
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: strpos() Emits ValueError
	:og:type: article
	:og:description: strpos() and stripos() emits a ValueError when the offset is out of range
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/strposValueError.html
	:og:locale: en

strpos() and stripos() emits a ValueError when the offset is out of range. In PHP 7.4, it emitted a warning.

PHP code
________
.. code-block:: php

   <?php
     strpos('a', 'abc', 17);
   ?>

Before
______
.. code-block:: output

   PHP Warning:  strpos(): Offset not contained in string
   
   Warning: strpos(): Offset not contained in string
   bool(false)

After
______
.. code-block:: output

   PHP Fatal error:  Uncaught ValueError: strpos(): Argument #3 ($offset) must be contained in argument #1 ($haystack) 


PHP version change
__________________
This behavior changed in 8.0



