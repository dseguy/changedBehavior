.. _`assert()-throws-exception`:

assert() Throws Exception
=========================
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


PHP version change: 8.0

