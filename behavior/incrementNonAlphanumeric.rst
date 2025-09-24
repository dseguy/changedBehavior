.. _`increment-non-alphanumeric`:

Increment Non-alphanumeric
==========================
.. meta::
	:description:
		Increment Non-alphanumeric: PHP has a string increment feature, where a string may be incremented by one, to its next ASCII character.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Increment Non-alphanumeric
	:twitter:description: Increment Non-alphanumeric: PHP has a string increment feature, where a string may be incremented by one, to its next ASCII character
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Increment Non-alphanumeric
	:og:type: article
	:og:description: PHP has a string increment feature, where a string may be incremented by one, to its next ASCII character
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/incrementNonAlphanumeric.html
	:og:locale: en

PHP has a string increment feature, where a string may be incremented by one, to its next ASCII character.



This does not apply to non-alphanumeric characters, such as ``space``, ``semi-colon``, etc. Until PHP 8.4, it was silent, and now, it is a warning.

PHP code
________
.. code-block:: php

   <?php
   
   $a = ';';
   ++$a;
   
   echo $a;
   
   ?>

Before
______
.. code-block:: output

   PHP Deprecated:  Increment on non-alphanumeric string is deprecated in /codes/incrementNonAlphanumeric.php on line 4
   
   Deprecated: Increment on non-alphanumeric string is deprecated in /codes/incrementNonAlphanumeric.php on line 4
   ;

After
______
.. code-block:: output

   PHP Deprecated:  Increment on non-numeric string is deprecated, use str_increment() instead in /codes/incrementNonAlphanumeric.php on line 4
   
   Deprecated: Increment on non-numeric string is deprecated, use str_increment() instead in /codes/incrementNonAlphanumeric.php on line 4
   ;


PHP version change
__________________
This behavior changed in 8.5



