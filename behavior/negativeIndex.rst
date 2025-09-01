.. _`negative-index-on-strings`:

Negative Index On Strings
=========================
.. meta::
	:description:
		Negative Index On Strings: Negative index reaches an offset in a string, starting from the last elements in that string, instead of starting from position 0.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Negative Index On Strings
	:twitter:description: Negative Index On Strings: Negative index reaches an offset in a string, starting from the last elements in that string, instead of starting from position 0
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Negative Index On Strings
	:og:type: article
	:og:description: Negative index reaches an offset in a string, starting from the last elements in that string, instead of starting from position 0
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/negativeIndex.html
	:og:locale: en

Negative index reaches an offset in a string, starting from the last elements in that string, instead of starting from position 0.



This feature is also supported by substr(), and was introduced in PHP 7.1.



PHP code
________
.. code-block:: php

   <?php
   
   $string = 'abc';
   
   var_dump($string[-1]);
   
   ?>

Before
______
.. code-block:: output

   PHP Notice:  Uninitialized string offset: -1 in /codes/negativeIndex.php on line 5
   
   Notice: Uninitialized string offset: -1 in /codes/negativeIndex.php on line 5
   string(0) "" 
   

After
______
.. code-block:: output

   string(1) "c" 
   


PHP version change
__________________
This behavior changed in 7.1



