.. _automatic-index-in-non-empty-array:

Automatic Index In Non Empty Array
==================================
.. meta::
	:description:
		Automatic Index In Non Empty Array: When starting from an array whose maximum key is integer and negative, PHP used to continue assigning indices with 0, instead of the following negative number.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Automatic Index In Non Empty Array
	:twitter:description: Automatic Index In Non Empty Array: When starting from an array whose maximum key is integer and negative, PHP used to continue assigning indices with 0, instead of the following negative number
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Automatic Index In Non Empty Array
	:og:type: article
	:og:description: When starting from an array whose maximum key is integer and negative, PHP used to continue assigning indices with 0, instead of the following negative number
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/array_next_id.html
	:og:locale: en

When starting from an array whose maximum key is integer and negative, PHP used to continue assigning indices with 0, instead of the following negative number. It is fixed in PHP 8.0.

PHP code
________
.. code-block:: php

   <?php
   
   $array = [
       -10 => 'a',
   ];
   $array[] = 'b';
   
   print_r($array);
   
   ?>

Before
______
.. code-block:: output

   Array
   (
       [-10] => a
       [0] => b
   )
   

After
______
.. code-block:: output

   Array
   (
       [-10] => a
       [-9] => b
   )
   


PHP version change
__________________
This behavior changed in 8.0


See Also
________

* `Using negative indices with PHP arrays <https://www.strangebuzz.com/en/snippets/using-negative-indices-with-php-arrays>`_



