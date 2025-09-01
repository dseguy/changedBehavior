.. _`setlocale()-does-not-affect-echo-anymore`:

setlocale() Does Not Affect Echo Anymore
========================================
.. meta::
	:description:
		setlocale() Does Not Affect Echo Anymore: setlocale() used to apply to several functions, including echo.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: setlocale() Does Not Affect Echo Anymore
	:twitter:description: setlocale() Does Not Affect Echo Anymore: setlocale() used to apply to several functions, including echo
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: setlocale() Does Not Affect Echo Anymore
	:og:type: article
	:og:description: setlocale() used to apply to several functions, including echo
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/setlocale_with_float.html
	:og:locale: en

setlocale() used to apply to several functions, including echo. With the French or German (or others) convention, the decimal separator is a comma, and PHP makes the conversion at echo time.



This is not the case anymore in PHP 8.0: anytime the float is converted to a string, the locale formatting is not applied anymore.



It is recommended to make this conversion explicit by using printf(), number_format() or a formatter function.

PHP code
________
.. code-block:: php

   <?php
   
   setlocale(LC_ALL, 'fr_FR.UTF-8');
   
   echo 1003.14;
   
   ?>

Before
______
.. code-block:: output

   1.003,14

After
______
.. code-block:: output

   3.14


PHP version change
__________________
This behavior changed in 8.0



