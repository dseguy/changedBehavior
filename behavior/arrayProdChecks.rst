.. _`array_product()-new-checks`:

array_product() New Checks
==========================
array_product() used to cast the arguments to integers before executing the multiplications. Nowadays, the strange types raise a warning, as illustrated here with the array. 

PHP code
________
.. code-block:: php

   <?php
   
   print array_product([1, true, []]);
   
   ?>

Before
______
.. code-block:: output

   1

After
______
.. code-block:: output

   PHP Warning:  array_product(): Multiplication is not supported on type array in /codes/arrayProdChecks.php on line 3
   
   Warning: array_product(): Multiplication is not supported on type array in /codes/arrayProdChecks.php on line 3
   1


PHP version change: 8.3

