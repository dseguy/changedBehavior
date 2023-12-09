.. _`sort()-places-integers-before-strings`:

sort() Places Integers Before Strings
=====================================
sort() used the PHP 7 way to compare values: then, strings would rank below integers, in particular below 0. 



In PHP 8, strings are now ranking above integers, and are moved to the end of the sorted array. This is related to the change of rules in comparisons.

PHP code
________
.. code-block:: php

   <?php
   
   $x = array('a',
              0,
              1,
              '0',
   );
   sort($x);
   print_r($x);
   ?>

Before
______
.. code-block:: output

   Array
   (
       [0] => a
       [1] => 0
       [2] => 0
       [3] => 1
   )
   

After
______
.. code-block:: output

   Array
   (
       [0] => 0
       [1] => 0
       [2] => 1
       [3] => a
   )
   


PHP version change: 8.0

