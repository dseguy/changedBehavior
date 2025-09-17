.. _`range()-with-int-and-string`:

range() With Int And String
===========================
.. meta::
	:description:
		range() With Int And String: range() now emits a warning when one of the arguments is a string, and the other is an integer.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: range() With Int And String
	:twitter:description: range() With Int And String: range() now emits a warning when one of the arguments is a string, and the other is an integer
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: range() With Int And String
	:og:type: article
	:og:description: range() now emits a warning when one of the arguments is a string, and the other is an integer
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/rangeWithIntAndString.html
	:og:locale: en

range() now emits a warning when one of the arguments is a string, and the other is an integer. It still behaves like before, and cast the string to an integer.

PHP code
________
.. code-block:: php

   <?php
   
   print_r(range(1, 'z')); 
   
   ?>

Before
______
.. code-block:: output

   Array
   (
       [0] => 1
       [1] => 0
   )
   

After
______
.. code-block:: output

   PHP Warning:  range(): Argument #1 ($start) must be a single byte string if argument #2 ($end) is a single byte string, argument #2 ($end) converted to 0 in /codes/rangeWithIntAndString.php on line 3
   
   Warning: range(): Argument #1 ($start) must be a single byte string if argument #2 ($end) is a single byte string, argument #2 ($end) converted to 0 in /codes/rangeWithIntAndString.php on line 3
   Array
   (
       [0] => 1
       [1] => 0
   )
   


PHP version change
__________________
This behavior changed in 8.3


Error Messages
______________

  + `0 <https://php-errors.readthedocs.io/en/latest/messages/.html>`_



