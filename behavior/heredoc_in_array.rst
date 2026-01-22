.. _heredoc-syntax-in-an-array:

Heredoc Syntax In An Array
==========================
.. meta::
	:description:
		Heredoc Syntax In An Array: Until PHP 7.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Heredoc Syntax In An Array
	:twitter:description: Heredoc Syntax In An Array: Until PHP 7
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Heredoc Syntax In An Array
	:og:type: article
	:og:description: Until PHP 7
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/heredoc_in_array.html
	:og:locale: en

Until PHP 7.2, it is only possible to use the HEREDOC (and NOWDOC) syntax with a final semicolon. This means it was impossible to use that syntax in an array, a list of arguments, or other context that do not finish the expression with a semicolon.

PHP code
________
.. code-block:: php

   <?php
   
   $a = array(<<<HEREDOC
   A
   HEREDOC,
   );
   
   print_r($a);
   
   ?>

Before
______
.. code-block:: output

   PHP Parse error:  syntax error
   
   Parse error: syntax error
   

After
______
.. code-block:: output

   Array
   (
       [0] => A
   )
   


PHP version change
__________________
This behavior changed in 7.3


Error Messages
______________

  + `syntax error, unexpected end of file <https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-end-of-file.html>`_



