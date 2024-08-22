.. _`ksort()-now-uses-regular-sorting`:

ksort() now uses regular sorting
================================
Until PHP 8.2, ksort() used a different sorting method to sort the keys. Since, PHP 8.2, it uses the same method than sort(). This means some values may have a different position.

PHP code
________
.. code-block:: php

   <?php
   
   $array = [ 0, '-f' => 1, 'f' => 2];
   
   ksort($array);
   
   print_r($array);
   
   ?>

Before
______
.. code-block:: output

   Array
   (
       [0] => 0
       [-f] => 1
       [f] => 2
   )
   

After
______
.. code-block:: output

   Array
   (
       [-f] => 1
       [0] => 0
       [f] => 2
   )
   


PHP version change
__________________
This behavior changed in 8.2


