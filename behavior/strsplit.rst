.. _strsplit()-with-empty-string:

strsplit() With Empty String
============================
.. meta::
	:description:
		strsplit() With Empty String: strsplit() splits a string into smaller strings of the same size.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: strsplit() With Empty String
	:twitter:description: strsplit() With Empty String: strsplit() splits a string into smaller strings of the same size
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: strsplit() With Empty String
	:og:type: article
	:og:description: strsplit() splits a string into smaller strings of the same size
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/strsplit.html
	:og:locale: en

strsplit() splits a string into smaller strings of the same size. Until PHP 8.2, it used to return an array with an empty string when splitting an empty string. Since then, it returns an empty array.



This has impact on the code after, in processing or testing the result of the split. 

PHP code
________
.. code-block:: php

   <?php
   var_dump(str_split('', 3));
   ?>

Before
______
.. code-block:: output

   Array
   (
       [0] => 
   )

After
______
.. code-block:: output

   Array
   (
   )


PHP version change
__________________
This behavior changed in 8.2



