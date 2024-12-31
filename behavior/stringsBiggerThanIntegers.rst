.. _`strings-are-bigger-than-integer`:

Strings Are Bigger Than Integer
===============================
.. meta::
	:description:
		Strings Are Bigger Than Integer: When comparings strings and integers with inequalities (<, =<, >, >=), strings used to be smaller than numbers and they are now bigger than number.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Strings Are Bigger Than Integer
	:twitter:description: Strings Are Bigger Than Integer: When comparings strings and integers with inequalities (<, =<, >, >=), strings used to be smaller than numbers and they are now bigger than number
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Strings Are Bigger Than Integer
	:og:type: article
	:og:description: When comparings strings and integers with inequalities (<, =<, >, >=), strings used to be smaller than numbers and they are now bigger than number
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/stringsBiggerThanIntegers.html
	:og:locale: en

When comparings strings and integers with inequalities (<, =<, >, >=), strings used to be smaller than numbers and they are now bigger than number. Unless, they can be converted to integer safely. 

PHP code
________
.. code-block:: php

   <?php
   
   var_dump('a' > -1);
   var_dump('a' > 0);
   var_dump('a' > 1);
   
   var_dump('a' < -1);
   var_dump('a' < 0);
   var_dump('a' < 1);
   
   ?>

Before
______
.. code-block:: output

   bool(true)
   bool(false)
   bool(false)
   bool(false)
   bool(false)
   bool(true)
   

After
______
.. code-block:: output

   bool(true)
   bool(true)
   bool(true)
   bool(false)
   bool(false)
   bool(false)
   


PHP version change
__________________
This behavior changed in 8.0


