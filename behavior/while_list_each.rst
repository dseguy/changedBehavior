.. _`each()-is-no-more`:

each() Is No More
=================
.. meta::
	:description:
		each() Is No More: The ``each`` function is the base for the ``while`` loop that traverse arrays.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: each() Is No More
	:twitter:description: each() Is No More: The ``each`` function is the base for the ``while`` loop that traverse arrays
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: each() Is No More
	:og:type: article
	:og:description: The ``each`` function is the base for the ``while`` loop that traverse arrays
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/while_list_each.html
	:og:locale: en

The ``each`` function is the base for the ``while`` loop that traverse arrays. The modern version of this loop is ``foreach``, which does not rely on ``each``, and improves the loop in speed and reliability. Hence, ``each`` was deprecated in PHP 7.4, and removed in 8.0.

PHP code
________
.. code-block:: php

   <?php
   
   while(list($k, $v) = each($array)) {
       print $k . ' => '. $v.PHP_EOL;
   }
   
   ?>

Before
______
.. code-block:: output

   PHP Deprecated:  The each() function is deprecated. This message will be suppressed on further calls
   
   Deprecated: The each() function is deprecated. This message will be suppressed on further calls
   PHP Warning:  Variable passed to each() is not an array or object
   
   Warning: Variable passed to each() is not an array or object
   

After
______
.. code-block:: output

   PHP Fatal error:  Uncaught Error: Call to undefined function each()
   
   Fatal error: Uncaught Error: Call to undefined function each()
   


PHP version change
__________________
This behavior was deprecated in 7.4

This behavior changed in 8.0


Error Messages
______________

  + `0 <https://php-errors.readthedocs.io/en/latest/messages/.html>`_



