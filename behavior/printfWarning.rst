.. _printf()-warns-about-unknown-formats:

printf() Warns About Unknown Formats
====================================
.. meta::
	:description:
		printf() Warns About Unknown Formats: printf(), and its related functions, reports unknown format specifiers.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: printf() Warns About Unknown Formats
	:twitter:description: printf() Warns About Unknown Formats: printf(), and its related functions, reports unknown format specifiers
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: printf() Warns About Unknown Formats
	:og:type: article
	:og:description: printf(), and its related functions, reports unknown format specifiers
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/printfWarning.html
	:og:locale: en

printf(), and its related functions, reports unknown format specifiers. The format specifiers are letters that format the data, passed in later arguments. 



Until PHP 8.0, printf() would check if there were enough arguments for the format. Otherwise, unknown formats were ignored, and the related argument was omitted silently.

PHP code
________
.. code-block:: php

   <?php
   
   print sprintf("%s %Z", 1, 3);
   // after  PHP 8.0:  Unknown format specifier Z
   // before PHP 8.0:  1
   
   ?>

Before
______
.. code-block:: output

    

After
______
.. code-block:: output

   PHP Fatal error:  Uncaught ValueError: Unknown format specifier "Z"


PHP version change
__________________
This behavior changed in 8.0


Error Messages
______________

  + `Unknown format specifier "Z" <https://php-errors.readthedocs.io/en/latest/messages/unknown-format-specifier-%22%25c.html>`_



