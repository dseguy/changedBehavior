.. _`krsort()-places-integers-before-strings-in-keys`:

krsort() Places Integers Before Strings In Keys
===============================================
krsort() used the PHP 7 way to compare values: then, strings would rank below integers, in particular below 0. 



In PHP 8.2, strings are now ranking above integers, and are moved to the end of the sorted array. This is related to the change of rules in comparisons.

PHP code
________
.. code-block:: php

   <?php
   
   $x = array('a' => 1, 
   		   0 => 2, 
   		   1 => 3, 
   		   '0' => 4,
   );
   krsort($x);
   print_r($x);

Before
______
.. code-block:: output

   Array
   (
       [1] => 3
       [a] => 1
       [0] => 4
   )
   

After
______
.. code-block:: output

   Array
   (
       [a] => 1
       [1] => 3
       [0] => 4
   )
   
   


PHP version change
__________________
This behavior changed in 8.2


