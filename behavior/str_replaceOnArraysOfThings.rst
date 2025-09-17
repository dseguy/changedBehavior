.. _`str_replace()-enforces-strings-in-array-argument`:

str_replace() Enforces Strings In Array Argument
================================================
.. meta::
	:description:
		str_replace() Enforces Strings In Array Argument: str_replace() accepts an array of strings as third argument: it applies all the replacements to all the strings in that arguments.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: str_replace() Enforces Strings In Array Argument
	:twitter:description: str_replace() Enforces Strings In Array Argument: str_replace() accepts an array of strings as third argument: it applies all the replacements to all the strings in that arguments
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: str_replace() Enforces Strings In Array Argument
	:og:type: article
	:og:description: str_replace() accepts an array of strings as third argument: it applies all the replacements to all the strings in that arguments
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/str_replaceOnArraysOfThings.html
	:og:locale: en

str_replace() accepts an array of strings as third argument: it applies all the replacements to all the strings in that arguments.



Until PHP 8.0, it was possible to pass an array of arrays, and the inner arrays would be omitted in the replacement. In PHP 8.0, the inner arrays are cast to a string, aka ``Array`` and then, the replacements occurs.



This is also applicable to str_ireplace().

PHP code
________
.. code-block:: php

   <?php
   
   var_dump(str_replace('a', 'b', [[]]));
   
   class x {
   	function __toString() {
   		return 'def';
   	}
   }
   
   var_dump(str_replace('a', 'b', [new x]));
   
   ?>

Before
______
.. code-block:: output

   array(1) {
     [0]=>
     array(0) {
     }
   }
   array(1) {
     [0]=>
     object(x)#1 (0) {
     }
   }
   

After
______
.. code-block:: output

   PHP Warning:  Array to string conversion
   
   Warning: Array to string conversion
   array(1) {
     [0]=>
     string(5) Arrby
   }
   array(1) {
     [0]=>
     string(3) def
   }
   


PHP version change
__________________
This behavior changed in 8.0



