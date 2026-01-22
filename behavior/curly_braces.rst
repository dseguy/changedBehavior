.. _array-syntax-with-curly-braces-are-no-more:

Array Syntax With Curly Braces Are No More
==========================================
.. meta::
	:description:
		Array Syntax With Curly Braces Are No More: Until PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Array Syntax With Curly Braces Are No More
	:twitter:description: Array Syntax With Curly Braces Are No More: Until PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Array Syntax With Curly Braces Are No More
	:og:type: article
	:og:description: Until PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/curly_braces.html
	:og:locale: en

Until PHP 8.4, using the array syntax with curly braces yielded a Fatal error, and a nice error message. 



After that, it is downgraded to a syntax error. 

PHP code
________
.. code-block:: php

   <?php
   
   $x{3} = 2;
   
   print_r($x);
   
   ?>

Before
______
.. code-block:: output

   PHP Fatal error:  Array and string offset access syntax with curly braces is no longer supported
   
   Fatal error: Array and string offset access syntax with curly braces is no longer supported
   

After
______
.. code-block:: output

   PHP Parse error:  syntax error, unexpected token {
   
   Parse error: syntax error, unexpected token {
   


PHP version change
__________________
This behavior changed in 8.4


Error Messages
______________

  + `Array and string offset access syntax with curly braces is deprecated <https://php-errors.readthedocs.io/en/latest/messages/array-and-string-offset-access-syntax-with-curly-braces-is-deprecated.html>`_



