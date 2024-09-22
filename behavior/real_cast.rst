.. _`(real)-is-replaced-by-(float)`:

(real) Is Replaced By (float)
=============================
(real) is replaced by (float) in PHP 8. It used to be a synonym of (float), and there is only one left. 

PHP code
________
.. code-block:: php

   <?php
   
   print (real) 1;
   
   
   ?>

Before
______
.. code-block:: output

   PHP Deprecated:  The (real) cast is deprecated, use (float) instead in /codes/real_cast.php on line 3
   
   Deprecated: The (real) cast is deprecated, use (float) instead in /codes/real_cast.php on line 3
   1

After
______
.. code-block:: output

   PHP Parse error:  The (real) cast has been removed, use (float) instead in /codes/real_cast.php on line 3
   
   Parse error: The (real) cast has been removed, use (float) instead in /codes/real_cast.php on line 3
   


PHP version change
__________________
This behavior changed in 8.0


Error Messages
______________

`The (real) cast is deprecated, use (float) instead <https://php-errors.readthedocs.io/en/latest/messages/the-(real)-cast-is-deprecated,-use-(float)-instead.html>`_



