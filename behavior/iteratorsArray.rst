.. _`iterator_count()-also-count-arrays`:

iterator_count() Also Count Arrays
==================================
The PHP native function used to accept only iterators. Since PHP 8.1, arrays are also welcomed. 

PHP code
________
.. code-block:: php

   <?php
   
   print iterator_count([1,2,3]);
   
   ?>

Before
______
.. code-block:: output

   Uncaught TypeError: iterator_count(): Argument #1 ($iterator) must be of type Traversable, array given

After
______
.. code-block:: output

   3


PHP version change: 8.2
Error Messages
________

Uncaught TypeError: iterator_count(): Argument #1 ($iterator) must be of type Traversable, array given


