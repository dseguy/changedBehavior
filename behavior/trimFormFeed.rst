.. _trim()-strips-form-feed-by-default:

trim() Strips Form Feed By Default
==================================
.. meta::
	:description:
		trim() Strips Form Feed By Default: ``trim()``, ``ltrim()`` and ``rtrim()`` remove a fixed set of characters by default when no second argument is provided.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: trim() Strips Form Feed By Default
	:twitter:description: trim() Strips Form Feed By Default: ``trim()``, ``ltrim()`` and ``rtrim()`` remove a fixed set of characters by default when no second argument is provided
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: trim() Strips Form Feed By Default
	:og:type: article
	:og:description: ``trim()``, ``ltrim()`` and ``rtrim()`` remove a fixed set of characters by default when no second argument is provided
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/trimFormFeed.html
	:og:locale: en

``trim()``, ``ltrim()`` and ``rtrim()`` remove a fixed set of characters by default when no second argument is provided. Until PHP 8.6, that set was space, tab, newline, carriage return, NUL byte and vertical tab. In PHP 8.6, the form feed character (``\f``, ``\x0C``) was added to that default set.

PHP code
________
.. code-block:: php

   <?php
   
   var_dump(trim("\fHello\f"));
   
   ?>

Before
______
.. code-block:: output

   string(7) Hello
   

After
______
.. code-block:: output

   string(5) Hello
   


PHP version change
__________________
This behavior changed in 8.6


See Also
________

* `PHP 8.6 NEWS <https://www.php.net/ChangeLog-8.php#8.6.0>`_



