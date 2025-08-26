.. _`negative-automatic-index-from-empty-array`:

Negative Automatic Index From Empty Array
=========================================
.. meta::
	:description:
		Negative Automatic Index From Empty Array: When starting from an empty array and assigning an initial negative integer index, PHP used to continue assigning indices with 0, instead of the following negative number.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Negative Automatic Index From Empty Array
	:twitter:description: Negative Automatic Index From Empty Array: When starting from an empty array and assigning an initial negative integer index, PHP used to continue assigning indices with 0, instead of the following negative number
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Negative Automatic Index From Empty Array
	:og:type: article
	:og:description: When starting from an empty array and assigning an initial negative integer index, PHP used to continue assigning indices with 0, instead of the following negative number
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/array_negative_id.html
	:og:locale: en

When starting from an empty array and assigning an initial negative integer index, PHP used to continue assigning indices with 0, instead of the following negative number. It is fixed in PHP 8.3.

PHP code
________
.. code-block:: php

   <?php
   
   $array = [];
   $array[-2] = 'a';
   $array[] = 'b';
   
   print_r($array);
   
   ?>

Before
______
.. code-block:: output

   Array
   (
       [-2] => a
       [0] => b
   )
   

After
______
.. code-block:: output

   Array
   (
       [-2] => a
       [-1] => b
   )
   


PHP version change
__________________
This behavior changed in 8.3


Error Messages
______________

  + `0 <https://php-errors.readthedocs.io/en/latest/messages/.html>`_



