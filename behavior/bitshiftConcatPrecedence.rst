.. _`bitshift-and-concat-precedence`:

Bitshift And Concat Precedence
==============================
<< and >> and . (dot) operators used to have the same priority. Thus, they used to be processed one after the other, from left to right. 



In PHP 8.0, the bitshift has now the highest precedence, and will happen before the concatenation.

PHP code
________
.. code-block:: php

   <?php
   
   echo 35 << 1 . '.' . 0 + 5;
   
   ?>

Before
______
.. code-block:: output

   70.5

After
______
.. code-block:: output

   2240


PHP version change
__________________
This behavior was deprecated in 7.4

This behavior changed in 8.0


