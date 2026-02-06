.. _match-is-now-a-keyword:

match Is Now A Keyword
======================
.. meta::
	:description:
		match Is Now A Keyword: Match() was introduced in PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: match Is Now A Keyword
	:twitter:description: match Is Now A Keyword: Match() was introduced in PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: match Is Now A Keyword
	:og:type: article
	:og:description: Match() was introduced in PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/matchKeyword.html
	:og:locale: en

Match() was introduced in PHP 8.0 as a new command. As a side effect, it is now a PHP keyword, and it is not possible to create classes, functions or constants with that name.

PHP code
________
.. code-block:: php

   <?php
   
   function match() {
   	echo __FUNCTION__;
   }
   
   match();
   
   ?>

Before
______
.. code-block:: output

   match

After
______
.. code-block:: output

   PHP Parse error:  syntax error, unexpected token "match", expecting "(" 
   
   Parse error: syntax error, unexpected token "match", expecting "(" 


PHP version change
__________________
This behavior changed in 8.0


Error Messages
______________

  + `syntax error, unexpected token "match", expecting "(" <https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22match%22%2C-expecting-%22%28%22.html>`_



