.. _`negative-automatic-index-from-empty-array`:

Negative Automatic Index From Empty Array
=========================================
When starting from an empty array and assigning an initial negative integer index, PHP used to continue assigning indices with 0, instead of the following negative number. It is fixed in PHP 8.3.

PHP code
________
.. code-block:: php

   <?php
   
   $array = [];
   $array[-2] = 'a';
   $array[] = 'b';
   
   print_r($array);
   
   ?>

Before
______
.. code-block:: output

   Array
   (
       [-2] => a
       [0] => b
   )
   

After
______
.. code-block:: output

   Array
   (
       [-2] => a
       [-1] => b
   )
   


PHP version change: 8.3

