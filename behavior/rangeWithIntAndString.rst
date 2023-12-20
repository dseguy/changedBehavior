.. _`range()-with-int-and-string`:

range() With Int And String
===========================
range() now emits a warning when one of the argument is a string, and the other is an integer. It still behaves like before, and cast the string to an integer.

PHP code
________
.. code-block:: php

   <?php
   
   print_r(range(1, 'z')); 
   
   ?>

Before
______
.. code-block:: output

   Array
   (
       [0] => 1
       [1] => 0
   )
   

After
______
.. code-block:: output

   PHP Warning:  range(): Argument #1 ($start) must be a single byte string if argument #2 ($end) is a single byte string, argument #2 ($end) converted to 0 in /codes/rangeWithIntAndString.php on line 3
   
   Warning: range(): Argument #1 ($start) must be a single byte string if argument #2 ($end) is a single byte string, argument #2 ($end) converted to 0 in /codes/rangeWithIntAndString.php on line 3
   Array
   (
       [0] => 1
       [1] => 0
   )
   


PHP version change
__________________
This behavior changed in 8.3


