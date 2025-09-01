.. _`strpos()-with-out-of-range-offset-is-a-fatal-error`:

strpos() With Out-Of-Range Offset Is A Fatal Error
==================================================
.. meta::
	:description:
		strpos() With Out-Of-Range Offset Is A Fatal Error: Requesting a large offset, beyond the size of the searched string, leads to a Fatal error in PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: strpos() With Out-Of-Range Offset Is A Fatal Error
	:twitter:description: strpos() With Out-Of-Range Offset Is A Fatal Error: Requesting a large offset, beyond the size of the searched string, leads to a Fatal error in PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: strpos() With Out-Of-Range Offset Is A Fatal Error
	:og:type: article
	:og:description: Requesting a large offset, beyond the size of the searched string, leads to a Fatal error in PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/strpos-and-offset.html
	:og:locale: en

Requesting a large offset, beyond the size of the searched string, leads to a Fatal error in PHP 8.0 and more recent. 



Until then, it was a warning.



This error message is shared by several PHP native and extension functions, namely ``mbstring`` and ``iconv``: ``strpos()``, ``strrpos()``, ``stripos()``, ``strripos()``, ``mb_strpos()``, ``mb_strrpos()``, ``mb_stripos()``, ``mb_strripos()``, ``iconv_strpos`` and ``iconv_strrpos``. 



PHP code
________
.. code-block:: php

   <?php
   
   strpos('abc', 'b', 6);
   
   ?>

Before
______
.. code-block:: output

   PHP Warning:  strpos(): Offset not contained in string in /codes/strpos-and-offset.php on line 3
   
   Warning: strpos(): Offset not contained in string in /codes/strpos-and-offset.php on line 3
   

After
______
.. code-block:: output

   PHP Fatal error:  Uncaught ValueError: strpos(): Argument #3 ($offset) must be contained in argument #1 ($haystack) in /codes/strpos-and-offset.php:3
   Stack trace:
   #0 /codes/strpos-and-offset.php(3): strpos('abc', 'b', 6)
   #1 {main}
     thrown in /codes/strpos-and-offset.php on line 3
   
   Fatal error: Uncaught ValueError: strpos(): Argument #3 ($offset) must be contained in argument #1 ($haystack) in /codes/strpos-and-offset.php:3
   Stack trace:
   #0 /codes/strpos-and-offset.php(3): strpos('abc', 'b', 6)
   #1 {main}
     thrown in /codes/strpos-and-offset.php on line 3
   


PHP version change
__________________
This behavior changed in 8.0



