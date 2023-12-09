.. _`no-reference-to-$globals-variable`:

No Reference To $GLOBALS Variable
=================================
Since PHP 8.2, it is not possible anymore to create a reference to the $GLOBALS variable. It prevents any unexpected updates to this array.



It is still possible to make a reference to any of the element of that array, individually.



PHP code
________
.. code-block:: php

   <?PHP
   
   $b = &$GLOBALS;
   
   print_r($b);
   
   ?>

Before
______
.. code-block:: output

   Array
   (
       [_GET] => Array
           (
           )
   
       [_POST] => Array
           (
           )
   
       [_COOKIE] => Array
           (
           )
   // .... and more
   

After
______
.. code-block:: output

   PHP Fatal error:  Cannot acquire reference to $GLOBALS


PHP version change: 8.2

