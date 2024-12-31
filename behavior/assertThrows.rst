.. _`assert()-throws-exception`:

assert() Throws Exception
=========================
.. meta::
	:description:
		assert() Throws Exception: assert() is the PHP native implementation of assertions.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: assert() Throws Exception
	:twitter:description: assert() Throws Exception: assert() is the PHP native implementation of assertions
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: assert() Throws Exception
	:og:type: article
	:og:description: assert() is the PHP native implementation of assertions
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/assertThrows.html
	:og:locale: en

assert() is the PHP native implementation of assertions. Until PHP 8.0, it would raise an error, while now, it throws an exception.

PHP code
________
.. code-block:: php

   <?php
   // error handler function
   function myErrorHandler($errno, $errstr, $errfile, $errline)
   {
           print __METHOD__;
   
       return true;
   }
   
   set_error_handler('myErrorHandler');
   
   try {
           assert(false);
   } catch (\Error $e) {
           print $e->getMessage();
   }
   
   ?>

Before
______
.. code-block:: output

   myErrorHandler

After
______
.. code-block:: output

   assert(false)


PHP version change
__________________
This behavior changed in 8.0


