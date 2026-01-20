.. _`unserialize()-error-report`:

unserialize() Error Report
==========================
.. meta::
	:description:
		unserialize() Error Report: unserialize() parses a string into a PHP data structure: array, int, object, etc.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: unserialize() Error Report
	:twitter:description: unserialize() Error Report: unserialize() parses a string into a PHP data structure: array, int, object, etc
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: unserialize() Error Report
	:og:type: article
	:og:description: unserialize() parses a string into a PHP data structure: array, int, object, etc
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/unserialize_notice.html
	:og:locale: en

unserialize() parses a string into a PHP data structure: array, int, object, etc. When the parser encounters an error, it emits a specific message, and returns null. This error used to be a ``notice`` and it now a ``warning``.

PHP code
________
.. code-block:: php

   <?php
   
   unserialize("an invalid string");
   
   ?>

Before
______
.. code-block:: output

   PHP Notice:  unserialize(): Error at offset 0 of 17 bytes
   
   Notice: unserialize(): Error at offset 0 of 17 bytes
   

After
______
.. code-block:: output

   PHP Warning:  unserialize(): Error at offset 0 of 17 bytes
   
   Warning: unserialize(): Error at offset 0 of 17 bytes
   


PHP version change
__________________
This behavior changed in 8.3



