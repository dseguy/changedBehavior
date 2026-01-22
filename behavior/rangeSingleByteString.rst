.. _range()-uses-single-byte-strings:

range() Uses Single Byte Strings
================================
.. meta::
	:description:
		range() Uses Single Byte Strings: When the first argument of range() is a single byte string, then the second argument must also be a single byte string, to keep the range consistent.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: range() Uses Single Byte Strings
	:twitter:description: range() Uses Single Byte Strings: When the first argument of range() is a single byte string, then the second argument must also be a single byte string, to keep the range consistent
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: range() Uses Single Byte Strings
	:og:type: article
	:og:description: When the first argument of range() is a single byte string, then the second argument must also be a single byte string, to keep the range consistent
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/rangeSingleByteString.html
	:og:locale: en

When the first argument of range() is a single byte string, then the second argument must also be a single byte string, to keep the range consistent. Until PHP 8.3, the first string was converted to a integer too, most often 0, and then, the range was created.

PHP code
________
.. code-block:: php

   <?php
   
   print_r(range('c', 3));
   
   ?>

Before
______
.. code-block:: output

   Array
   (
       [0] => 0
       [1] => 1
       [2] => 2
       [3] => 3
   )
   

After
______
.. code-block:: output

   PHP Warning:  range(): Argument #2 ($end) must be a single byte string if argument #1 ($start) is a single byte string, argument #1 ($start) converted to 0
   
   Warning: range(): Argument #2 ($end) must be a single byte string if argument #1 ($start) is a single byte string, argument #1 ($start) converted to 0
   Array
   (
       [0] => 0
       [1] => 1
       [2] => 2
       [3] => 3
   )
   


PHP version change
__________________
This behavior changed in 8.3


See Also
________

* `range <https://www.php.net/manual/en/function.range.php>`_


Error Messages
______________

  + `range(): Argument #2 ($end) must be a single byte string if argument #1 ($start) is a single byte string, argument #1 ($start) converted to 0 <https://php-errors.readthedocs.io/en/latest/messages/argument-%232-%28%24end%29-must-be-a-single-byte-string-if.html>`_



