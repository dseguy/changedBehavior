.. _creating-object-on-null:

Creating Object On Null
=======================
.. meta::
	:description:
		Creating Object On Null: Until PHP 8, it was possible to create an object just like a variable: simply by assigning a value to one property.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Creating Object On Null
	:twitter:description: Creating Object On Null: Until PHP 8, it was possible to create an object just like a variable: simply by assigning a value to one property
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Creating Object On Null
	:og:type: article
	:og:description: Until PHP 8, it was possible to create an object just like a variable: simply by assigning a value to one property
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/creatingObjectOnNull.html
	:og:locale: en

Until PHP 8, it was possible to create an object just like a variable: simply by assigning a value to one property. The created object was of class ``stdClass``, and could be used further.



In PHP 8.0, this is now a Fatal error. Later, undefined properties, also known as ``dynamic properties`` were deprecated, and will lead to a Fatal error in PHP 9.

PHP code
________
.. code-block:: php

   <?php
   
   $x->a = 1;
   
   print $x->a;
   
   ?>

Before
______
.. code-block:: output

   PHP Warning:  Creating default object from empty value 
   
   Warning: Creating default object from empty value 
   1

After
______
.. code-block:: output

   PHP Fatal error:  Uncaught Error: Attempt to assign property "a" on null 
   
   Fatal error: Uncaught Error: Attempt to assign property "a" on null 
   


PHP version change
__________________
This behavior was deprecated in 7.3

This behavior changed in 8.0


Error Messages
______________

  + `Creating default object from empty value <https://php-errors.readthedocs.io/en/latest/messages/creating-default-object-from-empty-value.html>`_


Analyzer
_________

  + `Structures/CreatingObjectOnNull <https://exakat.readthedocs.io/en/latest/Reference/Rules/Structures/CreatingObjectOnNull.html>`_



