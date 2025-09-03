.. _`boolean-used-as-array`:

Boolean Used As Array
=====================
.. meta::
	:description:
		Boolean Used As Array: Booleans, ``true`` and ``false`` are not an array, but it is possible to use the array syntax with it.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Boolean Used As Array
	:twitter:description: Boolean Used As Array: Booleans, ``true`` and ``false`` are not an array, but it is possible to use the array syntax with it
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Boolean Used As Array
	:og:type: article
	:og:description: Booleans, ``true`` and ``false`` are not an array, but it is possible to use the array syntax with it
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/BooleanAsArray.html
	:og:locale: en

Booleans, ``true`` and ``false`` are not an array, but it is possible to use the array syntax with it. The values are then always ``null``, and since PHP 7.4, a warning is emitted.

PHP code
________
.. code-block:: php

   <?php
   
   // var_dump(true[0]); is not a valid PHP syntax
   
   const MY_CONSTANT = true;
   var_dump(MY_CONSTANT[0]);
   
   ?>

Before
______
.. code-block:: output

   NULL

After
______
.. code-block:: output

   PHP Warning:  Trying to access array offset on true
   
   Warning: Trying to access array offset on null
   PHP


PHP version change
__________________
This behavior changed in 7.4


Analyzer
_________

  + `Php/FalseToArray <https://exakat.readthedocs.io/en/latest/Reference/Rules/Php/FalseToArray.html>`_



