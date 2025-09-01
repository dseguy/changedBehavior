.. _`convert_uuencode()-works-on-empty-strings`:

convert_uuencode() Works On Empty Strings
=========================================
.. meta::
	:description:
		convert_uuencode() Works On Empty Strings: Until PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: convert_uuencode() Works On Empty Strings
	:twitter:description: convert_uuencode() Works On Empty Strings: Until PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: convert_uuencode() Works On Empty Strings
	:og:type: article
	:og:description: Until PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/convert_uuencode.html
	:og:locale: en

Until PHP 8.0, convert_uuencode() returned false, aka error, when provided with an empty string. Since then, it returns a valid encoded string, which may be decoded later.

PHP code
________
.. code-block:: php

   <?php
   
   var_dump( convert_uuencode(''));
   
   ?>

Before
______
.. code-block:: output

   bool(false)
   

After
______
.. code-block:: output

   string(2) "\`
   " 
   


PHP version change
__________________
This behavior changed in 8.0



