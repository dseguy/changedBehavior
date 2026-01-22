.. _no-min()-on-empty-array:

No min() On Empty Array
=======================
.. meta::
	:description:
		No min() On Empty Array: min() does not accept an empty array as argument.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: No min() On Empty Array
	:twitter:description: No min() On Empty Array: min() does not accept an empty array as argument
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: No min() On Empty Array
	:og:type: article
	:og:description: min() does not accept an empty array as argument
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/minOnEmpty.html
	:og:locale: en

min() does not accept an empty array as argument. In that case, it used to return NULL, but NULL is also a valid return value, and it is not possible to differentiate between the NULL of an empty array and the NULL that is really a minimum value. 

PHP code
________
.. code-block:: php

   <?php
   
   min([]);
   
   ?>

Before
______
.. code-block:: output

   PHP Warning:  min(): Array must contain at least one element 
   
   Warning: min(): Array must contain at least one element
   

After
______
.. code-block:: output

   PHP Fatal error:  Uncaught ValueError: min(): Argument #1 ($value) must contain at least one element in codes/minOnEmpty.php:3
   
   Fatal error: Uncaught ValueError: min(): Argument #1 ($value) must contain at least one element in codes/minOnEmpty.php:3
   


PHP version change
__________________
This behavior changed in 8.0


Error Messages
______________

  + `Array must contain at least one element <https://php-errors.readthedocs.io/en/latest/messages/argument-%231-%28%24value%29-must-contain-at-least-one-element.html>`_


Analyzer
_________

  + `Structures/NoMaxOnEmptyArray <https://exakat.readthedocs.io/en/latest/Reference/Rules/Structures/NoMaxOnEmptyArray.html>`_



