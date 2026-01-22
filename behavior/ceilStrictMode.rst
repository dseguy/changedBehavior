.. _ceil()-strict-mode:

ceil() Strict Mode
==================
.. meta::
	:description:
		ceil() Strict Mode: ceil() doesn't accept internal objects that can be converted to integer.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: ceil() Strict Mode
	:twitter:description: ceil() Strict Mode: ceil() doesn't accept internal objects that can be converted to integer
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: ceil() Strict Mode
	:og:type: article
	:og:description: ceil() doesn't accept internal objects that can be converted to integer
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/ceilStrictMode.html
	:og:locale: en

ceil() doesn't accept internal objects that can be converted to integer. This is the case for gmp and bcmath objects, as shown in the example. Since PHP 8.0, only integers and floats are allowed.

PHP code
________
.. code-block:: php

   <?php
   
   $a = gmp_init(123456);
   
   echo ceil($a);
   
   ?>

Before
______
.. code-block:: output

   123456

After
______
.. code-block:: output

   PHP Fatal error:  Uncaught TypeError: ceil(): Argument #1 ($num) must be of type int|float, GMP given
   
   Fatal error: Uncaught TypeError: ceil(): Argument #1 ($num) must be of type int|float, GMP given
   


PHP version change
__________________
This behavior changed in 8.0


Error Messages
______________

  + `ceil(): Argument #1 ($num) must be of type int|float, GMP given <https://php-errors.readthedocs.io/en/latest/messages/must-be-of-type-%25s%2C-%25s-given.html>`_



