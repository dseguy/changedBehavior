.. _`calling-static-methods-on-strings`:

Calling Static Methods On Strings
=================================
.. meta::
	:description:
		Calling Static Methods On Strings: The left operand of the ``::`` operator for methods could not be a literal string, until PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Calling Static Methods On Strings
	:twitter:description: Calling Static Methods On Strings: The left operand of the ``::`` operator for methods could not be a literal string, until PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Calling Static Methods On Strings
	:og:type: article
	:og:description: The left operand of the ``::`` operator for methods could not be a literal string, until PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/InterpolatedStringMethodcall.html
	:og:locale: en

The left operand of the ``::`` operator for methods could not be a literal string, until PHP 8.0. It was not recognized as a valid syntax. 



In PHP 8.0 and later, it is possible to build a class name in a string, then use it immediately in a method call. 



It is also valid to access class constants and properties. 

PHP code
________
.. code-block:: php

   <?php
   
   $bar = abc;
   
   echo foo$bar::foo();
   
   class fooabc{
   	static function foo() {
   		print __METHOD__;
   	}
   }
   
   ?>

Before
______
.. code-block:: output

   PHP Parse error:  syntax error, unexpected '::' (T_PAAMAYIM_NEKUDOTAYIM), expecting ';' or ','
   
   Parse error: syntax error, unexpected '::' (T_PAAMAYIM_NEKUDOTAYIM), expecting ';' or ','
   

After
______
.. code-block:: output

   fooabc::foo


PHP version change
__________________
This behavior changed in 8.0


Error Messages
______________

  + `syntax error, unexpected '::' (T_PAAMAYIM_NEKUDOTAYIM) <https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-%27%3A%3A%27-%28t_paamayim_nekudotayim%29%2C-expecting-%27%3B%27-or-%27%2C%27.html>`_
  + `syntax-error,-unexpected-'::'-(t_paamayim_nekudotayim),-expecting-';'-or-',' <https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-%27%3A%3A%27-%28t_paamayim_nekudotayim%29%2C-expecting-%27%3B%27-or-%27%2C%27.html>`_



