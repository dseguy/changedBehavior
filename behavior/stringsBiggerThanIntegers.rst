.. _`strings-are-bigger-than-integers`:

Strings Are Bigger Than Integers
================================
.. meta::
	:description:
		Strings Are Bigger Than Integers: When comparings strings and integers with inequalities (<, =<, >, >=), strings used to be smaller than numbers and they are bigger than numbers in PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Strings Are Bigger Than Integers
	:twitter:description: Strings Are Bigger Than Integers: When comparings strings and integers with inequalities (<, =<, >, >=), strings used to be smaller than numbers and they are bigger than numbers in PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Strings Are Bigger Than Integers
	:og:type: article
	:og:description: When comparings strings and integers with inequalities (<, =<, >, >=), strings used to be smaller than numbers and they are bigger than numbers in PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/stringsBiggerThanIntegers.html
	:og:locale: en

When comparings strings and integers with inequalities (<, =<, >, >=), strings used to be smaller than numbers and they are bigger than numbers in PHP 8.0. Unless, they can be converted to integer safely.

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


See Also
________

* `PHP RFC: Saner string to number comparisons <https://wiki.php.net/rfc/string_to_number_comparison>`_


Error Messages
______________

  + `0 <https://php-errors.readthedocs.io/en/latest/messages/.html>`_



