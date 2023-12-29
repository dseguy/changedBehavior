.. _`max()-on-string-and-integer`:

max() On String And Integer
===========================
In PHP 8, the rules of comparison between integers and strings have changed. Hence, max() may return a different value on PHP 7 and PHP 8.

PHP code
________
.. code-block:: php

   <?php
   
   var_dump( max(['', 0]));
   
   ?>

Before
______
.. code-block:: output

   string(0) 
   

After
______
.. code-block:: output

   int(0)
   


PHP version change
__________________
This behavior changed in 8.0


