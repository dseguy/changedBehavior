.. _`strsplit()-with-empty-string`:

strsplit() With Empty String
============================
strstplit() splits a string into smaller strings of the same size. Until PHP 8.2, it would return an array with an empty string when splitting an empty string. Since then, it returns an empty array.

This has impact on the code after, in processing or testing the result of the split. 

PHP code
________
.. code-block:: php

   <?php
   var_dump(str_split('', 3));
   ?>

Before
______
.. code-block:: output

   Array
   (
       [0] => 
   )

After
______
.. code-block:: output

   Array
   (
   )


PHP version change
__________________
This behavior changed in 8.2


