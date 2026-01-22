.. _no-max()-on-empty-array:

No Max() On Empty Array
=======================
.. meta::
	:description:
		No Max() On Empty Array: max() does not accept an empty array as argument.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: No Max() On Empty Array
	:twitter:description: No Max() On Empty Array: max() does not accept an empty array as argument
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: No Max() On Empty Array
	:og:type: article
	:og:description: max() does not accept an empty array as argument
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/maxOnEmpty.html
	:og:locale: en

max() does not accept an empty array as argument. In that case, it used to return NULL, but NULL is also a valid return value, and it is not possible to differentiate between the NULL of an empty array and the NULL that is really a maximum value. 

PHP code
________
.. code-block:: php

   <?php
   
   max([]);
   
   ?>

Before
______
.. code-block:: output

   PHP Warning:  max(): Array must contain at least one element 
   
   Warning: max(): Array must contain at least one element 
   

After
______
.. code-block:: output

   PHP Fatal error:  Uncaught ValueError: max(): Argument #1 ($value) must contain at least one element 
   
   Fatal error: Uncaught ValueError: max(): Argument #1 ($value) must contain at least one element 
   


PHP version change
__________________
This behavior changed in 8.0


Error Messages
______________

  + `Array must contain at least one element <https://php-errors.readthedocs.io/en/latest/messages/argument-%231-%28%24value%29-must-contain-at-least-one-element.html>`_


Analyzer
_________

  + `Structures/NoMaxOnEmptyArray <https://exakat.readthedocs.io/en/latest/Reference/Rules/Structures/NoMaxOnEmptyArray.html>`_



