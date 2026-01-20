.. _`null-with-array_key_exists()`:

Null With array_key_exists()
============================
.. meta::
	:description:
		Null With array_key_exists(): ``null`` is not accepted anymore as the first argument of the PHP native function array_key_exists().
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Null With array_key_exists()
	:twitter:description: Null With array_key_exists(): ``null`` is not accepted anymore as the first argument of the PHP native function array_key_exists()
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Null With array_key_exists()
	:og:type: article
	:og:description: ``null`` is not accepted anymore as the first argument of the PHP native function array_key_exists()
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/NullWithArrayKeyExists.html
	:og:locale: en

``null`` is not accepted anymore as the first argument of the PHP native function array_key_exists(). Since PHP 8.5, ``null`` is not accepted anymore as a key in an array, so it is also not accepted with the function array_key_exists(), which checks if a key exists in an array.

PHP code
________
.. code-block:: php

   <?php
   
   $array = [null => 1]; // silent error 
   var_dump(array_key_exists(null, $array)); 
   
   ?>

Before
______
.. code-block:: output

   bool(true)
   

After
______
.. code-block:: output

   PHP Deprecated:  Using null as the key parameter for array_key_exists() is deprecated, use an empty string instead
   
   Deprecated: Using null as the key parameter for array_key_exists() is deprecated, use an empty string instead
   bool(true)
   


PHP version change
__________________
This behavior changed in 8.5



