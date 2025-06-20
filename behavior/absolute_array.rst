.. _`array-and-callable-cannot-be-absolute`:

array And callable Cannot Be Absolute
=====================================
.. meta::
	:description:
		array And callable Cannot Be Absolute: ``array`` and ``callable`` cannot be an absolute type, with the leading backslash.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: array And callable Cannot Be Absolute
	:twitter:description: array And callable Cannot Be Absolute: ``array`` and ``callable`` cannot be an absolute type, with the leading backslash
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: array And callable Cannot Be Absolute
	:og:type: article
	:og:description: ``array`` and ``callable`` cannot be an absolute type, with the leading backslash
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/absolute_array.html
	:og:locale: en

``array`` and ``callable`` cannot be an absolute type, with the leading backslash. This was not the case until PHP 8.5, and is now in harmony with other types like ``int``.

PHP code
________
.. code-block:: php

   <?php
   
   function foo() : \array {
       return [];
   }
   
   print_r(foo());
   
   ?>

Before
______
.. code-block:: output

   PHP Fatal error:  Uncaught TypeError: foo(): Return value must be of type array, array returned in /codes/absolute_array.php:4
   Stack trace:
   #0 /codes/absolute_array.php(7): foo()
   #1 {main}
     thrown in /codes/absolute_array.php on line 4
   
   Fatal error: Uncaught TypeError: foo(): Return value must be of type array, array returned in /codes/absolute_array.php:4
   Stack trace:
   #0 /codes/absolute_array.php(7): foo()
   #1 {main}
     thrown in /codes/absolute_array.php on line 4
   

After
______
.. code-block:: output

   PHP Fatal error:  Cannot use array as a type name as it is reserved in /codes/absolute_array.php on line 3
   Stack trace:
   #0 {main}
   
   Fatal error: Cannot use array as a type name as it is reserved in /codes/absolute_array.php on line 3
   Stack trace:
   #0 {main}
   


PHP version change
__________________
This behavior changed in 8.5


