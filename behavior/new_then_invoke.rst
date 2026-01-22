.. _direct-calls-on-new:

Direct calls on new
===================
.. meta::
	:description:
		Direct calls on new: Calling an object directly upon instantiation was not possible in PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Direct calls on new
	:twitter:description: Direct calls on new: Calling an object directly upon instantiation was not possible in PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Direct calls on new
	:og:type: article
	:og:description: Calling an object directly upon instantiation was not possible in PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/new_then_invoke.html
	:og:locale: en

Calling an object directly upon instantiation was not possible in PHP 8.3: it required parenthesis, like every other ``new`` call.



In PHP 8.4, it is now possible to call a method or access a property directly at instantiation time. It is also possible to call its ``__invoke`` method.

PHP code
________
.. code-block:: php

   <?php
   
   class x {
       function __construct($i = 0) { echo __METHOD__.PHP_EOL;}
       
       function __invoke()          { echo __METHOD__.PHP_EOL;}
   }
   
   $x = new x;
   
   $y = new $x()();
   // identical to 
   //$y = (new $x(0)) ()
   
   var_dump($y);
   // NULL 
   
   ?>

Before
______
.. code-block:: output

   PHP Parse error:  syntax error, unexpected token "(" 
   
   Parse error: syntax error, unexpected token "(" 
   

After
______
.. code-block:: output

   x::__construct
   x::__construct
   x::__invoke
   NULL
   


PHP version change
__________________
This behavior changed in 8.4


Error Messages
______________

  + `syntax error, unexpected token "(" <https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%28%22.html>`_



