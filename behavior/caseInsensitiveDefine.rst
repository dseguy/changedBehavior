.. _`php-constants-are-not-case-insensitive`:

PHP Constants Are Not Case Insensitive
======================================
.. meta::
	:description:
		PHP Constants Are Not Case Insensitive: PHP allowed the creation of case-insensitive constants with the function ``define``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: PHP Constants Are Not Case Insensitive
	:twitter:description: PHP Constants Are Not Case Insensitive: PHP allowed the creation of case-insensitive constants with the function ``define``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: PHP Constants Are Not Case Insensitive
	:og:type: article
	:og:description: PHP allowed the creation of case-insensitive constants with the function ``define``
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/caseInsensitiveDefine.html
	:og:locale: en

PHP allowed the creation of case-insensitive constants with the function ``define``. That was the third parameter to be passed, with a default, and often ignored value of ``false``.



Since PHP 8.0, case-insensitive constants are not possible anymore. Creating a constant with both ``const`` and ``define`` only leads to case-sensitive global constant.



As a reminder, accessing a non-existing constant is a Fatal error, so an error on the case in a global constant leads to it.

PHP code
________
.. code-block:: php

   <?php
   
   define('A', 1, true);
   
   echo a;
   echo A;
   
   ?>

Before
______
.. code-block:: output

   11

After
______
.. code-block:: output

   PHP Warning:  define(): Argument #3 ($case_insensitive) is ignored since declaration of case-insensitive constants is no longer supported
   
   Warning: define(): Argument #3 ($case_insensitive) is ignored since declaration of case-insensitive constants is no longer supported
   PHP Fatal error:  Uncaught Error: Undefined constant a
   
   Fatal error: Uncaught Error: Undefined constant a
   


PHP version change
__________________
This behavior changed in 8.0


Error Messages
______________

  + `define(): Argument #3 ($case_insensitive) is ignored since declaration of case-insensitive constants is no longer supported <https://php-errors.readthedocs.io/en/latest/messages/define%28%29%3A-argument-%233-%28%24case_insensitive%29-is-ignored-since-declaration-of-case-insensitive-constants-is-no-longer-supported.html>`_
  + `define(): delaration of case insensitive constants is deprecated <https://php-errors.readthedocs.io/en/latest/messages/define%28%29%3A-declaration-of-case-insensitive-constants-is-deprecated.html>`_


Analyzer
_________

  + `Constants/CaseInsensitiveConstant <https://exakat.readthedocs.io/en/latest/Reference/Rules/Constants/CaseInsensitiveConstant.html>`_



