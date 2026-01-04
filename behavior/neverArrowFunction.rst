.. _`never-arrow-function`:

Never Arrow Function
====================
.. meta::
	:description:
		Never Arrow Function: The never type requires the closure to not return, but the arrow function always returns something.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Never Arrow Function
	:twitter:description: Never Arrow Function: The never type requires the closure to not return, but the arrow function always returns something
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Never Arrow Function
	:og:type: article
	:og:description: The never type requires the closure to not return, but the arrow function always returns something
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/neverArrowFunction.html
	:og:locale: en

The never type requires the closure to not return, but the arrow function always returns something. By using die(), that closure doesn't return anymore, but PHP only recognized this since PHP 8.2. Before PHP 8.1, it was valid syntax, as ``never`` was recognized as a class name.

PHP code
________
.. code-block:: php

   <?php
   
   fn($a) : never => die(); 
   
   ?>

Before
______
.. code-block:: output

   PHP Fatal error:  A never-returning function must not return
   
   Fatal error: A never-returning function must not return
   

After
______
.. code-block:: output

   


PHP version change
__________________
This behavior changed in 8.1



