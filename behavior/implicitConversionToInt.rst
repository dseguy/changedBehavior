.. _implicit-array-key-conversion:

Implicit Array Key Conversion
=============================
.. meta::
	:description:
		Implicit Array Key Conversion: Array keys accept only string and integer types.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Implicit Array Key Conversion
	:twitter:description: Implicit Array Key Conversion: Array keys accept only string and integer types
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Implicit Array Key Conversion
	:og:type: article
	:og:description: Array keys accept only string and integer types
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/implicitConversionToInt.html
	:og:locale: en

Array keys accept only string and integer types. When providing a float, PHP used to convert it to an int. It still does, in PHP 8.1, though it now emits a deprecation warning.

PHP code
________
.. code-block:: php

   <?php
   
   $a = [];
   $a[15.5] = 2; // deprecated, as key value loses the 0.5 component
   $a[15.0] = 3; // ok, as 15.0 == 15
   
   print $a[15];
   
   ?>

Before
______
.. code-block:: output

   2

After
______
.. code-block:: output

   PHP Deprecated:  Implicit conversion from float 15.5 to int loses precision 
   
   Deprecated: Implicit conversion from float 15.5 to int loses precision 
   3
   


PHP version change
__________________
This behavior was deprecated in 8.1

This behavior changed in 9.0


Error Messages
______________

  + `Implicit conversion from float 15.5 to int loses precision <https://php-errors.readthedocs.io/en/latest/messages/implicit-conversion-from-float-string-%22%25s%22-to-int-loses.html>`_



