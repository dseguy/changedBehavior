.. _`php-warns-when-finding-unconvertible-characters`:

PHP Warns When Finding Unconvertible Characters
===============================================
.. meta::
	:description:
		PHP Warns When Finding Unconvertible Characters: PHP emits a deprecation when reaching a character that cannot be converted.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: PHP Warns When Finding Unconvertible Characters
	:twitter:description: PHP Warns When Finding Unconvertible Characters: PHP emits a deprecation when reaching a character that cannot be converted
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: PHP Warns When Finding Unconvertible Characters
	:og:type: article
	:og:description: PHP emits a deprecation when reaching a character that cannot be converted
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/octalNonConvertible.html
	:og:locale: en

PHP emits a deprecation when reaching a character that cannot be converted. For example, when converting from octal to decimal, a ``8``, a ``9``, or a letter cannot be converted to a number. 



Until PHP 7.4, PHP would stop at that character, then return the converted part. Later, it also emits a warning.

PHP code
________
.. code-block:: php

   <?php
   
   // 9 is not an octal number
   echo octdec(342391);
   
   ?>

Before
______
.. code-block:: output

   14489

After
______
.. code-block:: output

   PHP Deprecated:  Invalid characters passed for attempted conversion, these have been ignored
   
   Deprecated: Invalid characters passed for attempted conversion, these have been ignored
   14489


PHP version change
__________________
This behavior changed in 7.4



