.. _`automatic-index-in-non-empty-array`:

Automatic Index In Non Empty Array
==================================
When starting from an array whose maximum key is integer and negative, PHP used to continue assigning indices with 0, instead of the following negative number. It is fixed in PHP 8.0.

PHP code
________
.. code-block:: php

   <?php
   
   $array = [
       -10 => 'a',
   ];
   $array[] = 'b';
   
   print_r($array);
   
   ?>

Before
______
.. code-block:: output

   Array
   (
       [-10] => a
       [0] => b
   )
   

After
______
.. code-block:: output

   Array
   (
       [-10] => a
       [-9] => b
   )
   


PHP version change
__________________
This behavior changed in 8.0


