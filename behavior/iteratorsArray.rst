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


PHP version change
__________________
This behavior changed in 8.2


Error Messages
______________

  + `Uncaught TypeError: iterator_count(): Argument #1 ($iterator) must be of type Traversable, array given <https://php-errors.readthedocs.io/en/latest/messages/Uncaught+TypeError%3A+iterator_count%28%29%3A+Argument+%231+%28%24iterator%29+must+be+of+type+Traversable%2C+array+given.html>`_



