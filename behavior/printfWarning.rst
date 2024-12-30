.. _`printf()-warns-about-unknown-formats`:

printf() Warns About Unknown Formats
====================================
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


See Also
________

* `printf <https://www.php.net/printf>`_


