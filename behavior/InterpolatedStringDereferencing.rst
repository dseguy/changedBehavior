.. _`interpolated-string-dereferencing`:

Interpolated String Dereferencing
=================================
.. meta::
	:description:
		Interpolated String Dereferencing: Until PHP 8, it was not possible to use a literal string as a variable for an array, or a class name, and access, respectively, index, properties, constant or methods.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Interpolated String Dereferencing
	:twitter:description: Interpolated String Dereferencing: Until PHP 8, it was not possible to use a literal string as a variable for an array, or a class name, and access, respectively, index, properties, constant or methods
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Interpolated String Dereferencing
	:og:type: article
	:og:description: Until PHP 8, it was not possible to use a literal string as a variable for an array, or a class name, and access, respectively, index, properties, constant or methods
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/InterpolatedStringDereferencing.html
	:og:locale: en

Until PHP 8, it was not possible to use a literal string as a variable for an array, or a class name, and access, respectively, index, properties, constant or methods. It was not possible for interpolated strings, which are strings that include another string. 



In PHP 8, this is now possible.

PHP code
________
.. code-block:: php

   <?php
   
   $bar = "abc";
   
   echo "foo$bar"[0];
   echo PHP_EOL
   echo "foo$bar"::foo();
   
   class fooabc{
       static function foo() {
           print __METHOD__;
       }
   }
   
   ?>

Before
______
.. code-block:: output

   PHP Parse error:  syntax error, unexpected '[', expecting ';' or ',' 

After
______
.. code-block:: output

   f
   fooabc::foo


PHP version change
__________________
This behavior changed in 8.0


See Also
________

* `PHP RFC: Arbitrary string interpolation <https://wiki.php.net/rfc/arbitrary_string_interpolation>`_


Error Messages
______________

  + `syntax error, unexpected '[', expecting ';' or ',' <https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-%27%5B%27%2C-expecting-%27%3B%27-or-%27%2C%27.html>`_


Analyzer
_________

  + `Php/InterpolatedStringDereferencing <https://exakat.readthedocs.io/en/latest/Reference/Rules/Php/InterpolatedStringDereferencing.html>`_



