.. _call-method-on-new:

Call Method On New
==================
.. meta::
	:description:
		Call Method On New: It was not possible to call a method directly after instantiating an object: the instantiation had to be done within a parenthesis.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Call Method On New
	:twitter:description: Call Method On New: It was not possible to call a method directly after instantiating an object: the instantiation had to be done within a parenthesis
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Call Method On New
	:og:type: article
	:og:description: It was not possible to call a method directly after instantiating an object: the instantiation had to be done within a parenthesis
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/newThenMethodCall.html
	:og:locale: en

It was not possible to call a method directly after instantiating an object: the instantiation had to be done within a parenthesis. 



In PHP 8.4, it is now possible to call directly a method after instantiation, as long as the new call includes the parenthesises. 

PHP code
________
.. code-block:: php

   <?php
   
   class x {} 
   
   new x()->a();
   
   // This is not possible: it's missing the parenthesis
   //new x->a();
   
   ?>

Before
______
.. code-block:: output

   PHP Parse error:  syntax error, unexpected token "->" 
   
   Parse error: syntax error, unexpected token "->" 
   

After
______
.. code-block:: output

   


PHP version change
__________________
This behavior changed in 8.4


Error Messages
______________

  + `syntax error, unexpected token "->" <https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22-%3E%22.html>`_



