.. _`plus-and-concat-precedence`:

Plus And Concat Precedence
==========================
.. meta::
	:description:
		Plus And Concat Precedence: + (and -) and .
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Plus And Concat Precedence
	:twitter:description: Plus And Concat Precedence: + (and -) and 
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Plus And Concat Precedence
	:og:type: article
	:og:description: + (and -) and 
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/plusConcatPrecedence.html
	:og:locale: en

+ (and -) and . (dot) operators used to have the same priority. Thus, they used to be processed one after the other, from left to right. 



In PHP 8.0, the addition has now the highest precedence, and will happen before the concatenation.

PHP code
________
.. code-block:: php

   <?php
   
   echo 35 + 7 . '.' . 0 + 5;
   
   ?>

Before
______
.. code-block:: output

   42.5

After
______
.. code-block:: output

   47


PHP version change
__________________
This behavior was deprecated in 7.4

This behavior changed in 8.0



