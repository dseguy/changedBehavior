.. _`dynamic-class-constant`:

Dynamic Class Constant
======================
.. meta::
	:description:
		Dynamic Class Constant: To access a constant value with its name in a string, one required the constant() function.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Dynamic Class Constant
	:twitter:description: Dynamic Class Constant: To access a constant value with its name in a string, one required the constant() function
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Dynamic Class Constant
	:og:type: article
	:og:description: To access a constant value with its name in a string, one required the constant() function
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/dynamicClassConstant.html
	:og:locale: en

To access a constant value with its name in a string, one required the constant() function. ``constant('\A::'.$constantName)``.



In PHP 8.3, there is a dedicated syntax, to access those constants dynamically. 



PHP code
________
.. code-block:: php

   <?php
   
   class a {
   	public const A = 1;
   }
   
   $b = 'A';
   
   echo A::{$b};
   
   ?>

Before
______
.. code-block:: output

   PHP Parse error:  syntax error

After
______
.. code-block:: output

   1


PHP version change
__________________
This behavior changed in 8.3



