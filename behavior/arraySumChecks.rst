.. _`array_sum()-checks-operands-more-thoroughly`:

array_sum() Checks Operands More Thoroughly
===========================================
array_sum() used to cast the arguments to integers before executing the additions. Nowadays, the strange types raise a warning, as illustrated here with the array. 

PHP code
________
.. code-block:: php

   <?php
   
   print array_sum([1, false, []]);
   
   ?>

Before
______
.. code-block:: output

   1

After
______
.. code-block:: output

   PHP Warning:  array_sum(): Addition is not supported on type array in /Users/famille/Desktop/changedBehavior/codes/arraySumChecks.php on line 3
   
   Warning: array_sum(): Addition is not supported on type array in /Users/famille/Desktop/changedBehavior/codes/arraySumChecks.php on line 3
   1


PHP version change: 8.3

See Also
________

* `A Comprehensive Guide to PHP's array_sum() Function <https://reintech.io/blog/a-comprehensive-guide-to-phps-array-sum-function>`_


