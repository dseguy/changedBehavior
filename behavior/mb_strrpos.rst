.. _`mb_strrpos()-third-argument-is-not-encoding`:

mb_strrpos() Third Argument Is Not Encoding
===========================================
.. meta::
	:description:
		mb_strrpos() Third Argument Is Not Encoding: The third argument of mb_strrpos() was the offset where to start the search in the string.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: mb_strrpos() Third Argument Is Not Encoding
	:twitter:description: mb_strrpos() Third Argument Is Not Encoding: The third argument of mb_strrpos() was the offset where to start the search in the string
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: mb_strrpos() Third Argument Is Not Encoding
	:og:type: article
	:og:description: The third argument of mb_strrpos() was the offset where to start the search in the string
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/mb_strrpos.html
	:og:locale: en

The third argument of mb_strrpos() was the offset where to start the search in the string. It was often 0, although the 4th argument was the encoding. Since the encoding was more often used, and the offset forgotten, mb_strrpos() used to recognize the encoding when it is used in position 3, and use it. In PHP 8.0, it is not the case anymore.

PHP code
________
.. code-block:: php

   <?php
   
   // Valid in PHP 7.x
   echo mb_strrpos('abc', 'a', 'utf8');
   
   // Valid in PHP 8.+
   echo mb_strrpos('abc', 'a', 0, 'utf8');
   echo mb_strrpos('abc', 'a', encoding: 'utf8');
   
   ?>

Before
______
.. code-block:: output

   PHP Deprecated:  mb_strrpos(): Passing the encoding as third parameter is deprecated. Use an explicit zero offset 
   
   Deprecated: mb_strrpos(): Passing the encoding as third parameter is deprecated. Use an explicit zero offset 
   0

After
______
.. code-block:: output

   PHP Fatal error:  Uncaught TypeError: mb_strrpos(): Argument #3 ($offset) must be of type int, string given 
   Stack trace:
   #0 /codes/mb_strrpos.php(3): mb_strrpos('abc', 'a', 'utf8')
   #1 {main}
     thrown 
   
   Fatal error: Uncaught TypeError: mb_strrpos(): Argument #3 ($offset) must be of type int, string given 
   Stack trace:
   #0 /codes/mb_strrpos.php(3): mb_strrpos('abc', 'a', 'utf8')
   #1 {main}
     thrown 
   


PHP version change
__________________
This behavior changed in 8.0


Error Messages
______________

  + `0 <https://php-errors.readthedocs.io/en/latest/messages/.html>`_



