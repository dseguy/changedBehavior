.. _mixed-is-now-a-keyword:

mixed Is Now A Keyword
======================
.. meta::
	:description:
		mixed Is Now A Keyword: mixed was introduced in PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: mixed Is Now A Keyword
	:twitter:description: mixed Is Now A Keyword: mixed was introduced in PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: mixed Is Now A Keyword
	:og:type: article
	:og:description: mixed was introduced in PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/mixedKeyword.html
	:og:locale: en

mixed was introduced in PHP 8.0 as a new type. As a side effect, it is now a PHP keyword, and it is not possible to create classes, functions or constants with that name.

PHP code
________
.. code-block:: php

   <?php
   
   class mixed {
   	function __construct() {
   		echo __METHOD__;
   	}
   }
   
   new mixed;
   
   ?>

Before
______
.. code-block:: output

   mixed::__construct

After
______
.. code-block:: output

   PHP Fatal error:  Cannot use 'mixed' as class name as it is reserved 
   
   Fatal error: Cannot use 'mixed' as class name as it is reserved 
   


PHP version change
__________________
This behavior changed in 8.0


Error Messages
______________

  + `Cannot use 'mixed' as class name as it is reserved <https://php-errors.readthedocs.io/en/latest/messages/cannot-use-%27mixed%27-as-class-name-as-it-is-reserved.html>`_



