.. _max()-on-string-and-integer:

max() On String And Integer
===========================
.. meta::
	:description:
		max() On String And Integer: In PHP 8, the rules of comparison between integers and strings have changed.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: max() On String And Integer
	:twitter:description: max() On String And Integer: In PHP 8, the rules of comparison between integers and strings have changed
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: max() On String And Integer
	:og:type: article
	:og:description: In PHP 8, the rules of comparison between integers and strings have changed
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/maxOnStringAndInt.html
	:og:locale: en

In PHP 8, the rules of comparison between integers and strings have changed. Hence, max() may return a different value on PHP 7 and PHP 8.

PHP code
________
.. code-block:: php

   <?php
   
   var_dump( max(['', 0]));
   
   ?>

Before
______
.. code-block:: output

   string(0) 
   

After
______
.. code-block:: output

   int(0)
   


PHP version change
__________________
This behavior changed in 8.0



