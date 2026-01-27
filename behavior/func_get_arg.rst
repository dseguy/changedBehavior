.. _func_get_arg()-changed-behavior:

func_get_arg() Changed Behavior
===============================
.. meta::
	:description:
		func_get_arg() Changed Behavior: ``func_get_arg()`` and ``func_get_args()`` used to report the calling value of the argument, until PHP 7.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: func_get_arg() Changed Behavior
	:twitter:description: func_get_arg() Changed Behavior: ``func_get_arg()`` and ``func_get_args()`` used to report the calling value of the argument, until PHP 7
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: func_get_arg() Changed Behavior
	:og:type: article
	:og:description: ``func_get_arg()`` and ``func_get_args()`` used to report the calling value of the argument, until PHP 7
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/func_get_arg.html
	:og:locale: en

``func_get_arg()`` and ``func_get_args()`` used to report the calling value of the argument, until PHP 7. 



Since PHP 7, it is reporting the value of the argument at calling time, which may have been modified by a previous instruction. 



This code will display 1 in PHP 7, and 0 in PHP 5.

PHP code
________
.. code-block:: php

   <?php
   
   function x($a) {
       print func_get_arg(0);  // 0 
       $a++;
       print func_get_arg(0);  // 1
   }
   
   x(0);
   ?>

Before
______
.. code-block:: output

   00

After
______
.. code-block:: output

   01


PHP version change
__________________
This behavior changed in 7.2



