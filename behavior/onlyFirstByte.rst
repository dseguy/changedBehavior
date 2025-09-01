.. _`only-first-byte`:

Only First Byte
===============
.. meta::
	:description:
		Only First Byte: When assigning a string to a position inside another string, PHP reports a warning: indeed, only the first byte is used.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Only First Byte
	:twitter:description: Only First Byte: When assigning a string to a position inside another string, PHP reports a warning: indeed, only the first byte is used
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Only First Byte
	:og:type: article
	:og:description: When assigning a string to a position inside another string, PHP reports a warning: indeed, only the first byte is used
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/onlyFirstByte.html
	:og:locale: en

When assigning a string to a position inside another string, PHP reports a warning: indeed, only the first byte is used.

PHP code
________
.. code-block:: php

   <?php
   
   $str = 'xy';  
   
   // first letter is now a
   $str[0] = 'a';
   
   // second letter is now b, c is ignored
   $str[1] = 'bc';
   
   echo $str;
   
   ?>

Before
______
.. code-block:: output

   ab

After
______
.. code-block:: output

   PHP Warning:  Only the first byte will be assigned to the string offset in /codes/onlyFirstByte.php on line 9
   
   Warning: Only the first byte will be assigned to the string offset in /codes/onlyFirstByte.php on line 9
   ab


PHP version change
__________________
This behavior changed in 8.0


Analyzer
_________

  + `Structures/OnlyFirstByte <https://exakat.readthedocs.io/en/latest/Reference/Rules/Structures/OnlyFirstByte.html>`_



