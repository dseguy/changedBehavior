.. _integer-non-silent-conversion:

Integer Non-silent Conversion
=============================
.. meta::
	:description:
		Integer Non-silent Conversion: When a string is converted into a integer, with problems, the notice was upgraded to a Warning.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Integer Non-silent Conversion
	:twitter:description: Integer Non-silent Conversion: When a string is converted into a integer, with problems, the notice was upgraded to a Warning
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Integer Non-silent Conversion
	:og:type: article
	:og:description: When a string is converted into a integer, with problems, the notice was upgraded to a Warning
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/intSilentConversion.html
	:og:locale: en

When a string is converted into a integer, with problems, the notice was upgraded to a Warning. This raised level may end up filling logs.



This applies to all mathematical operations, such as multiplication, divisions, modulo, exponent, etc.

PHP code
________
.. code-block:: php

   <?php
   
   print $a = 1 + '3a';
   
   ?>

Before
______
.. code-block:: output

   PHP Notice:  A non well formed numeric value encountered 
   
   Notice: A non well formed numeric value encountered 
   4

After
______
.. code-block:: output

   PHP Warning:  A non-numeric value encountered 
   
   Warning: A non-numeric value encountered 
   4


PHP version change
__________________
This behavior changed in 8.0


Error Messages
______________

  + `A non-numeric value encountered <https://php-errors.readthedocs.io/en/latest/messages/a-non-numeric-value-encountered.html>`_



