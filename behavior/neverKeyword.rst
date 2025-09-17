.. _`newver-is-now-a-keyword`:

newver Is Now A Keyword
=======================
.. meta::
	:description:
		newver Is Now A Keyword: Never became a PHP reserved keyword in PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: newver Is Now A Keyword
	:twitter:description: newver Is Now A Keyword: Never became a PHP reserved keyword in PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: newver Is Now A Keyword
	:og:type: article
	:og:description: Never became a PHP reserved keyword in PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/neverKeyword.html
	:og:locale: en

Never became a PHP reserved keyword in PHP 8.1. It is used as special type, and cannot be used anymore for function names, classnames, etc.

PHP code
________
.. code-block:: php

   <?php
   
   class never {
   	function __construct() {
   		print __METHOD__;
   	}
   }
   
   new never;
   
   ?>

Before
______
.. code-block:: output

   never::__construct

After
______
.. code-block:: output

   PHP Fatal error:  Cannot use 'never' as class name as it is reserved in /codes/neverKeyword.php on line 3
   
   Fatal error: Cannot use 'never' as class name as it is reserved in /codes/neverKeyword.php on line 3
   


PHP version change
__________________
This behavior changed in 8.1


Error Messages
______________

  + `0 <https://php-errors.readthedocs.io/en/latest/messages/.html>`_



