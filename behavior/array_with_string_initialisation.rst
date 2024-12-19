.. _`array-usage-with-string-initialisation`:

Array Usage With String Initialisation
======================================
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

   abc34PHP Warning:  Illegal string offset 'c' in /codes/array_with_string_initialisation.php on line 7
   
   Warning: Illegal string offset 'c' in /codes/array_with_string_initialisation.php on line 7
   

After
______
.. code-block:: output

   abc34PHP Fatal error:  Uncaught TypeError: Cannot access offset of type string on string in /codes/array_with_string_initialisation.php:7
   Stack trace:
   #0 {main}
     thrown in /codes/array_with_string_initialisation.php on line 7
   
   Fatal error: Uncaught TypeError: Cannot access offset of type string on string in /codes/array_with_string_initialisation.php:7
   Stack trace:
   #0 {main}
     thrown in /codes/array_with_string_initialisation.php on line 7
   


PHP version change
__________________
This behavior changed in 8.0


Error Messages
______________

  + `Cannot access offset of type string on string <https://php-errors.readthedocs.io/en/latest/messages/cannot-access-offset-of-type-%25s-on-%25s.html>`_



