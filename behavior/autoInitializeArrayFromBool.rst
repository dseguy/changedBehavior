.. _`auto-initialization-from-boolean`:

Auto-initialization From Boolean
================================
.. meta::
	:description:
		Auto-initialization From Boolean: The auto-initialization is the conversion a boolean ``false`` or ``true``, to an array, by using the array syntax on it.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Auto-initialization From Boolean
	:twitter:description: Auto-initialization From Boolean: The auto-initialization is the conversion a boolean ``false`` or ``true``, to an array, by using the array syntax on it
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Auto-initialization From Boolean
	:og:type: article
	:og:description: The auto-initialization is the conversion a boolean ``false`` or ``true``, to an array, by using the array syntax on it
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/autoInitializeArrayFromBool.html
	:og:locale: en

The auto-initialization is the conversion a boolean ``false`` or ``true``, to an array, by using the array syntax on it.



When applied to a property, it may be impossible, given the type of that property. The warning message also appears if the type allow it: it is recommended to convert the property to an array before using the array syntax.

PHP code
________
.. code-block:: php

   <?php
   
   class X {
       public bool $property = false;
       public bool|array $property2 = false;
   }
   
   $x = new X;
   // Fatal error, as type doesn't allow it
   $x->property[3] = 2;
   
   // Deprecated error, as type allow it
   $x->property2[4] = 5;
   
   ?>

Before
______
.. code-block:: output

   PHP Parse error:  syntax error
   
   Parse error: syntax error
   

After
______
.. code-block:: output

   PHP Fatal error:  Uncaught TypeError: Cannot auto-initialize an array inside property X::$property of type bool
   
   Fatal error: Uncaught TypeError: Cannot auto-initialize an array inside property X::$property of type bool
   


PHP version change
__________________
This behavior changed in 7.4


Analyzer
_________

  + `Php/FalseToArray <https://exakat.readthedocs.io/en/latest/Reference/Rules/Php/FalseToArray.html>`_



