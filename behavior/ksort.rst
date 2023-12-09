.. _`ksort()-now-places-integers-before-strings`:

ksort() Now Places Integers Before Strings
==========================================
ksort() used the PHP 7 way to compare values: then, strings would rank below integers, in particular below 0. 



In PHP 8, strings are now ranking above integers, and are moved to the end of the sorted array. This is related to the change of rules in comparisons.

PHP code
________
.. code-block:: php

   <?php
   
   $x = array('a' => 1, 
              0 => 2, 
              1 => 3, 
              '0' => 4,
   );
   ksort($x);
   print_r($x);
   ?>

Before
______
.. code-block:: output

   Array
   (
       [a] => 1
       [0] => 4
       [1] => 3
   )
   

After
______
.. code-block:: output

   Array
   (
       [0] => 4
       [1] => 3
       [a] => 1
   )
   


PHP version change: 8.0

