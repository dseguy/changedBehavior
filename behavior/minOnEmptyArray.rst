.. _`min()-doesn't-accept-empty-arrays`:

min() Doesn't Accept Empty Arrays
=================================
.. meta::
	:description:
		min() Doesn't Accept Empty Arrays: min() doesn't accept empty arrays anymore.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: min() Doesn't Accept Empty Arrays
	:twitter:description: min() Doesn't Accept Empty Arrays: min() doesn't accept empty arrays anymore
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: min() Doesn't Accept Empty Arrays
	:og:type: article
	:og:description: min() doesn't accept empty arrays anymore
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/minOnEmptyArray.html
	:og:locale: en

min() doesn't accept empty arrays anymore. It used to, and returned false, which is a type away from 0. 



Nowadays, to distinguish between returned false or null and an empty array, an exception is raised. It is recommended to check the array for content before using min() or to catch the Error with a try catch. 



Note that max() behave the same.

PHP code
________
.. code-block:: php

   <?php
   
   try {
   	$a = min([]);
   } catch (\Error $e) {
   	print $e->getMessage();
   }
   
   var_dump($a);
   
   ?>

Before
______
.. code-block:: output

   PHP Warning:  min(): Array must contain at least one element
   
   Warning: min(): Array must contain at least one element
   bool(false)
   

After
______
.. code-block:: output

   min(): Argument #1 ($value) must contain at least one elementPHP Warning:  Undefined variable $a
   
   Warning: Undefined variable $a
   NULL
   


PHP version change
__________________
This behavior changed in 8.0



