.. _`sorting-closure-must-return-integers`:

Sorting Closure Must Return Integers
====================================
Comparison closures used in custom sorting need to return an integer, while they could yield true or false. This applies to all sorting functions, including usort(), uasort(), and uksort().

PHP code
________
.. code-block:: php

   <?php
   
   $array = [1, 2, 3];
   
   // Replace
   usort($array, fn($a, $b) => $a > $b);
   // With
   usort($array, fn($a, $b) => $a <=> $b);
   
   print_r($array);
   ?>
   

Before
______
.. code-block:: output

   Array
   (
       [0] => 1
       [1] => 2
       [2] => 3
   )
   

After
______
.. code-block:: output

   PHP Deprecated:  usort(): Returning bool from comparison function is deprecated, return an integer less than, equal to, or greater than zero in /codes/sortClosureReturnType.php on line 6
   
   Deprecated: usort(): Returning bool from comparison function is deprecated, return an integer less than, equal to, or greater than zero in /codes/sortClosureReturnType.php on line 6
   Array
   (
       [0] => 1
       [1] => 2
       [2] => 3
   )
   


PHP version change
__________________
This behavior was deprecated in 8.0

This behavior changed in 9.0


Error Messages
______________

  + `usort(): Returning bool from comparison function is deprecated, return an integer less than, equal to, or greater than zero <https://php-errors.readthedocs.io/en/latest/messages/usort(): Returning bool from comparison function is deprecated, return an integer less than, equal to, or greater than zero.html>`_



