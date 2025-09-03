.. _`array-usage-with-string-initialisation`:

Array Usage With String Initialisation
======================================
.. meta::
	:description:
		Array Usage With String Initialisation: String and arrays share the same syntax when using integer index: it accesses one element in the array or string, to reading or modifying.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Array Usage With String Initialisation
	:twitter:description: Array Usage With String Initialisation: String and arrays share the same syntax when using integer index: it accesses one element in the array or string, to reading or modifying
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Array Usage With String Initialisation
	:og:type: article
	:og:description: String and arrays share the same syntax when using integer index: it accesses one element in the array or string, to reading or modifying
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/array_with_string_initialisation.html
	:og:locale: en

String and arrays share the same syntax when using integer index: it accesses one element in the array or string, to reading or modifying. 



On the other hand, strings do not accept string as index. In older PHP versions, PHP would convert the string to an integer, and apply the operation. In PHP 8.0, it is now forbidden to use those index, unless the string can be converted to an integer.

PHP code
________
.. code-block:: php

   <?php
   
   $s = 'abc';
   $s[3] = 3;
   $s['4'] = '4';
   print $s;
   $s['c'] = 3;
   
   ?>

Before
______
.. code-block:: output

   abc34PHP Warning:  Illegal string offset 'c'
   
   Warning: Illegal string offset 'c'
   

After
______
.. code-block:: output

   abc34PHP Fatal error:  Uncaught TypeError: Cannot access offset of type string on string
   
   Fatal error: Uncaught TypeError: Cannot access offset of type string on string
   


PHP version change
__________________
This behavior changed in 8.0



