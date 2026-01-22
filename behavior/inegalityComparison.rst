.. _inegality-comparisons:

Inegality Comparisons
=====================
.. meta::
	:description:
		Inegality Comparisons: The loose comparisons (which includes ``=``) between integers and strings have changed in PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Inegality Comparisons
	:twitter:description: Inegality Comparisons: The loose comparisons (which includes ``=``) between integers and strings have changed in PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Inegality Comparisons
	:og:type: article
	:og:description: The loose comparisons (which includes ``=``) between integers and strings have changed in PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/inegalityComparison.html
	:og:locale: en

The loose comparisons (which includes ``=``) between integers and strings have changed in PHP 8.0. Until now, a string was strictly superior to any integer, but was superior or egal to any integer. 



Since PHP 8.0, strings are considered to be higher than integers. The comparison is consistent between the strict and inclusive comparison.



This also applies to float.

PHP code
________
.. code-block:: php

   <?php
   
   var_dump(0 > 'a');
   var_dump(0 >= 'a');
   
   var_dump(0 < 'a');
   var_dump(0 <= 'a');
   
   ?>

Before
______
.. code-block:: output

   bool(false)
   bool(true)
   bool(false)
   bool(true)
   

After
______
.. code-block:: output

   bool(false)
   bool(false)
   bool(true)
   bool(true)
   


PHP version change
__________________
This behavior changed in 8.0



