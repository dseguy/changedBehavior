.. _`unserialize()-error-report`:

unserialize() Error Report
==========================
.. meta::
	:description:
		unserialize() Error Report: unserialize() decodes a string into a PHP data structure: array, int, object, etc.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: unserialize() Error Report
	:twitter:description: unserialize() Error Report: unserialize() decodes a string into a PHP data structure: array, int, object, etc
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: unserialize() Error Report
	:og:type: article
	:og:description: unserialize() decodes a string into a PHP data structure: array, int, object, etc
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/unserialize_notice.html
	:og:locale: en

unserialize() decodes a string into a PHP data structure: array, int, object, etc. When the 

PHP code
________
.. code-block:: php

   <?php
   
   unserialize("an invalid string");
   
   ?>

Before
______
.. code-block:: output

   PHP Notice:  unserialize(): Error at offset 0 of 17 bytes in /codes/unserialize_notice.php on line 3
   
   Notice: unserialize(): Error at offset 0 of 17 bytes in /codes/unserialize_notice.php on line 3
   

After
______
.. code-block:: output

   PHP Warning:  unserialize(): Error at offset 0 of 17 bytes in /codes/unserialize_notice.php on line 3
   
   Warning: unserialize(): Error at offset 0 of 17 bytes in /codes/unserialize_notice.php on line 3
   


PHP version change
__________________
This behavior changed in 8.3


