.. _no-dynamic-global-variables:

No Dynamic Global Variables
===========================
.. meta::
	:description:
		No Dynamic Global Variables: In PHP 5.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: No Dynamic Global Variables
	:twitter:description: No Dynamic Global Variables: In PHP 5
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: No Dynamic Global Variables
	:og:type: article
	:og:description: In PHP 5
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/globalDynamicVariable.html
	:og:locale: en

In PHP 5.6, dynamic global variables were possible. This means that a variable, whose name is stored in another variable, could be dynamically used with the ``global`` keyword.



These notations are now dropped, except for with the ``$\{   \}`` operator.

PHP code
________
.. code-block:: php

   <?php
   
   // Valid in all PHP versions
   global $normalGlobal;
   
   // Forbidden in PHP 7
   global $$variable->global ;
   
   // Tolerated in PHP 7
   global $\{$variable->global\}; 
   
   ?>

Before
______
.. code-block:: output

   1

After
______
.. code-block:: output

   PHP Parse error:  syntax error, unexpected token "->", expecting "," or ";" 
   
   Parse error: syntax error, unexpected token "->", expecting "," or ";" 
   


PHP version change
__________________
This behavior changed in 5.6


Error Messages
______________

  + `syntax error, unexpected token "->", expecting "," or ";" <https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22-%3E%22%2C-expecting-%22%2C%22-or-%22%3B%22.html>`_



