.. _`version_compare()-stricter-operators`:

version_compare() Stricter Operators
====================================
.. meta::
	:description:
		version_compare() Stricter Operators: version_compare() compares version strings, using an operator, passed as third parameter.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: version_compare() Stricter Operators
	:twitter:description: version_compare() Stricter Operators: version_compare() compares version strings, using an operator, passed as third parameter
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: version_compare() Stricter Operators
	:og:type: article
	:og:description: version_compare() compares version strings, using an operator, passed as third parameter
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/version_compare.html
	:og:locale: en

version_compare() compares version strings, using an operator, passed as third parameter. Until PHP 8.3, unknown operators are ignored, and the function uses the default value. 



Nowadays, it is generating a fatal error.

PHP code
________
.. code-block:: php

   <?php
   
   print version_compare('1.0', '2.3', '!');
   
   ?>

Before
______
.. code-block:: output

   1

After
______
.. code-block:: output

   PHP Fatal error:  Uncaught ValueError: version_compare(): Argument #3 ($operator) must be a valid comparison operator


PHP version change
__________________
This behavior changed in 8.1


Error Messages
______________

  + `version_compare(): Argument #3 ($operator) must be a valid comparison operator <https://php-errors.readthedocs.io/en/latest/messages/must-be-a-valid-comparison-operator.html>`_



