.. _`isset()-on-constants`:

isset() On Constants
====================
.. meta::
	:description:
		isset() On Constants: Until PHP 7.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: isset() On Constants
	:twitter:description: isset() On Constants: Until PHP 7
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: isset() On Constants
	:og:type: article
	:og:description: Until PHP 7
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/issetWithConstant.html
	:og:locale: en

Until PHP 7.0, it was not possible to use isset() on a constant. PHP mistook it with an expression, and stopped. 



Since PHP 7.0, it is possible to use isset() with a constant, in particular with the array syntax or the object syntax. Still, isset() should not be used to check the existence of the constant: rather, there is the native function ``defined()``.

PHP code
________
.. code-block:: php

   <?php
   const X = [1,2,3];
   
   if (isset(X[4])) {
       echo 'set';
   } else {
       echo 'not set';
   }
   ?>

Before
______
.. code-block:: output

   PHP Fatal error:  Cannot use isset() on the result of an expression (you can use "null !== expression" instead) in /codes/issetWithConstant.php on line 4
   
   Fatal error: Cannot use isset() on the result of an expression (you can use "null !== expression" instead) in /codes/issetWithConstant.php on line 4
   

After
______
.. code-block:: output

   not set


PHP version change
__________________
This behavior changed in 7.0


