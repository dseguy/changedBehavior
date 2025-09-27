.. _`set_exception_handler()-must-update-its-type-to-throwable`:

set_exception_handler() Must Update Its Type To Throwable
=========================================================
.. meta::
	:description:
		set_exception_handler() Must Update Its Type To Throwable: Until PHP 7.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: set_exception_handler() Must Update Its Type To Throwable
	:twitter:description: set_exception_handler() Must Update Its Type To Throwable: Until PHP 7
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: set_exception_handler() Must Update Its Type To Throwable
	:og:type: article
	:og:description: Until PHP 7
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/setExceptionHandlerType.html
	:og:locale: en

Until PHP 7.0, all thrown issues were children of the ``Exception`` class. In PHP 7.0, all issues are children of ``Throwable``. ``Exception`` is not only one of two classes implementing it, along with ``Error``. 



To keep compatibility, it is important to switch types.

PHP code
________
.. code-block:: php

   <?php
   
   // PHP 5.6- typed with Exception
   class foo { 
       static function bar(\Exception $e) {
           print $e->getMessage();
       } 
   }
   
   set_exception_handler([Foo::class, 'bar']);
   
   // Produces an error
   1 / 0;
   
   ?>

Before
______
.. code-block:: output

   PHP Warning:  Division by zero 
   
   Warning: Division by zero 
   

After
______
.. code-block:: output

   PHP Fatal error:  Uncaught TypeError: foo::bar(): Argument #1 ($e) must be of type Exception, DivisionByZeroError given 
   


PHP version change
__________________
This behavior changed in 8.0



