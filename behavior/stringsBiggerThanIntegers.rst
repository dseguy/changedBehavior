.. _`strings-are-bigger-than-integer`:

Strings Are Bigger Than Integer
===============================
When comparings strings and integers with inequalities (<, =<, >, >=), strings used to be smaller than numbers and they are now bigger than number. Unless, they can be converted to integer safely. 

PHP code
________
.. code-block:: php

   <?php
   
   var_dump('a' > -1);
   var_dump('a' > 0);
   var_dump('a' > 1);
   
   var_dump('a' < -1);
   var_dump('a' < 0);
   var_dump('a' < 1);
   
   ?>

Before
______
.. code-block:: output

   bool(true)
   bool(false)
   bool(false)
   bool(false)
   bool(false)
   bool(true)
   

After
______
.. code-block:: output

   bool(true)
   bool(true)
   bool(true)
   bool(false)
   bool(false)
   bool(false)
   


PHP version change: 8.0

