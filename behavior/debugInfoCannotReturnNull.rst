.. _magic-method-__debuginfo()-cannot-return-null:

Magic Method __debugInfo() cannot return null
=============================================
.. meta::
	:description:
		Magic Method __debugInfo() cannot return null: __debugInfo() is a magic method that returns an array with debug information.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Magic Method __debugInfo() cannot return null
	:twitter:description: Magic Method __debugInfo() cannot return null: __debugInfo() is a magic method that returns an array with debug information
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Magic Method __debugInfo() cannot return null
	:og:type: article
	:og:description: __debugInfo() is a magic method that returns an array with debug information
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/debugInfoCannotReturnNull.html
	:og:locale: en

__debugInfo() is a magic method that returns an array with debug information. It gives a chance to the program to return any useful information, beyond the local properties. It also allows to remove any sensitive information, such as passwords or secrets. Since PHP 8.6, it is not possible to return NULL: the method method must return an array, albeit empty.

PHP code
________
.. code-block:: php

   <?php
   
   class x {
       function __debugInfo() {
           return null;
       }
   }
   
   var_dump(new x);
   
   ?>

Before
______
.. code-block:: output

   object(x)#1 (0) {
   }
   

After
______
.. code-block:: output

   PHP Deprecated:  Returning null from x::__debugInfo() is deprecated, return an empty array instead in /codes/debugInfoCannotReturnNull.php on line 9
   
   Deprecated: Returning null from x::__debugInfo() is deprecated, return an empty array instead in /codes/debugInfoCannotReturnNull.php on line 9
   object(x)#1 (0) {
   }
   


PHP version change
__________________
This behavior changed in 8.5



