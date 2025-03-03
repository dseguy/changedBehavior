.. _`array_unique()-don't-filter-enums`:

array_unique() Don't Filter Enums
=================================
.. meta::
	:description:
		array_unique() Don't Filter Enums: In PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: array_unique() Don't Filter Enums
	:twitter:description: array_unique() Don't Filter Enums: In PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: array_unique() Don't Filter Enums
	:og:type: article
	:og:description: In PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/array_unique_enum.html
	:og:locale: en

In PHP 8.1, array_unique() compared the enumerations cases directly, and they were all distinct one from another. The result was 

PHP code
________
.. code-block:: php

   <?php
   
   enum E: string
   {
       case A = 'A';
       case B = 'B';
       case C = 'C';
   }
   
   $data = [
       E::A,
       E::B,
       E::C,
       E::A,
       E::B,
       E::C,
   ];
   
   $data = array_unique($data);
   
   var_dump($data);
   
   ?>

Before
______
.. code-block:: output

   PHP Parse error:  syntax error, unexpected identifier "E" in /codes/array_unique_enum.php on line 3
   
   Parse error: syntax error, unexpected identifier E in /codes/array_unique_enum.php on line 3
   

After
______
.. code-block:: output

   PHP Fatal error:  Uncaught Error: Class Test not found in /codes/array_unique_enum.php:11
   Stack trace:
   #0 {main}
     thrown in /codes/array_unique_enum.php on line 11
   
   Fatal error: Uncaught Error: Class Test not found in /codes/array_unique_enum.php:11
   Stack trace:
   #0 {main}
     thrown in /codes/array_unique_enum.php on line 11
   


PHP version change
__________________
This behavior changed in 8.1


