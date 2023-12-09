.. _`min()-doesn't-accept-empty-arrays`:

min() Doesn't Accept Empty Arrays
=================================
min() doesn't accept empty arrays anymore. It used to, and returned false, which is a type away from 0. 



Nowadays, to distinguish between returned false or null and an empty array, an exception is raised. It is recommended to check the array for content before using min() or to catch the Error with a try catch. 



Note that max() behave the same.

PHP code
________
.. code-block:: php

   <?php
   
   try {
   	$a = min([]);
   } catch (\Error $e) {
   	print $e->getMessage();
   }
   
   var_dump($a);
   
   ?>

Before
______
.. code-block:: output

   PHP Warning:  min(): Array must contain at least one element in /Users/famille/Desktop/changedBehavior/codes/minOnEmptyArray.php on line 4
   
   Warning: min(): Array must contain at least one element in /Users/famille/Desktop/changedBehavior/codes/minOnEmptyArray.php on line 4
   bool(false)
   

After
______
.. code-block:: output

   min(): Argument #1 ($value) must contain at least one elementPHP Warning:  Undefined variable $a in /Users/famille/Desktop/changedBehavior/codes/minOnEmptyArray.php on line 9
   
   Warning: Undefined variable $a in /Users/famille/Desktop/changedBehavior/codes/minOnEmptyArray.php on line 9
   NULL
   


PHP version change: 8.0
Error Messages
________

Array must contain at least one element


