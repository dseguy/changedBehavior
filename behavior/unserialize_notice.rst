.. _`unserialize()-error-report`:

unserialize() Error Report
==========================
unserialize() decodes a string into a PHP data structure: array, int, object, etc. When the 

PHP code
________
.. code-block:: php

   <?php
   
   unserialize(an invalid string);
   
   ?>

Before
______
.. code-block:: output

   PHP Notice:  unserialize(): Error at offset 0 of 17 bytes in /Users/famille/Desktop/changedBehavior/codes/unserialize_notice.php on line 3
   
   Notice: unserialize(): Error at offset 0 of 17 bytes in /Users/famille/Desktop/changedBehavior/codes/unserialize_notice.php on line 3
   

After
______
.. code-block:: output

   PHP Warning:  unserialize(): Error at offset 0 of 17 bytes in /Users/famille/Desktop/changedBehavior/codes/unserialize_notice.php on line 3
   
   Warning: unserialize(): Error at offset 0 of 17 bytes in /Users/famille/Desktop/changedBehavior/codes/unserialize_notice.php on line 3
   


PHP version change: 8.3

