.. _`plus-and-concat-precedence`:

Plus And Concat Precedence
==========================
+ (and -) and . (dot) operators used to have the same priority. Thus, they used to be processed one after the other, from left to right. 



In PHP 8.0, the addition has now the highest precedence, and will happen before the concatenation.

PHP code
________
.. code-block:: php

   <?php
   
   echo 35 + 7 . '.' . 0 + 5;
   
   ?>

Before
______
.. code-block:: output

   42.5

After
______
.. code-block:: output

   47


PHP version change: 8.0

