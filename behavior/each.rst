.. _each()-has-been-removed:

each() Has Been Removed
=======================
.. meta::
	:description:
		each() Has Been Removed: The ``each()`` function has been deprecated in PHP 7.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: each() Has Been Removed
	:twitter:description: each() Has Been Removed: The ``each()`` function has been deprecated in PHP 7
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: each() Has Been Removed
	:og:type: article
	:og:description: The ``each()`` function has been deprecated in PHP 7
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/each.html
	:og:locale: en

The ``each()`` function has been deprecated in PHP 7.x, and removed in PHP 8.0. Use foreach() instead.

PHP code
________
.. code-block:: php

   <?php
   
   $array = ['a' => 1];
   list($a, $b) = each($array);
   
   echo $a; 
   echo $b;
   
   ?>

Before
______
.. code-block:: output

   PHP Deprecated:  The each() function is deprecated. This message will be suppressed on further calls
   
   Deprecated: The each() function is deprecated. This message will be suppressed on further calls
   a1

After
______
.. code-block:: output

   PHP Fatal error:  Uncaught Error: Call to undefined function each()
   
   Fatal error: Uncaught Error: Call to undefined function each()


PHP version change
__________________
This behavior changed in 8.0


Error Messages
______________

  + `The each() function is deprecated. This message will be suppressed on further calls <https://php-errors.readthedocs.io/en/latest/messages/the-each%28%29-function-is-deprecated.-this-message-will-be-suppressed-on-further-calls.html>`_



