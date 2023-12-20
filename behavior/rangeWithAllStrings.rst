.. _`range()-lists-everything-between-strings`:

range() Lists Everything Between Strings
========================================
range() used to cast the arguments to integers. In PHP 8.3, strings are used as is, and range() returns the list of chars between the ASCII codes of those strings. 

PHP code
________
.. code-block:: php

   <?php
   
   print_r(range('0', 'A')); 
   
   ?>

Before
______
.. code-block:: output

   Array
   (
       [0] => 0
   )
   

After
______
.. code-block:: output

   Array
   (
       [0] => 0
       [1] => 1
       [2] => 2
       [3] => 3
       [4] => 4
       [5] => 5
       [6] => 6
       [7] => 7
       [8] => 8
       [9] => 9
       [10] => :
       [11] => ;
       [12] => <
       [13] => =
       [14] => >
       [15] => ?
       [16] => @
       [17] => A
   )
   


PHP version change
__________________
This behavior changed in 8.3


