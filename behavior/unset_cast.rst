.. _`(unset)-was-removed`:

(unset) Was Removed
===================
(unset) operator is removed. Use the unset() function for that feature.

PHP code
________
.. code-block:: php

   <?php
   
   $a = 1;
   (unset) $a;
   
   var_dump($a);
   
   ?>

Before
______
.. code-block:: output

   PHP Deprecated:  The (unset) cast is deprecated in /codes/unset_cast.php on line 4
   
   Deprecated: The (unset) cast is deprecated in /codes/unset_cast.php on line 4
   int(1)
   

After
______
.. code-block:: output

   PHP Fatal error:  The (unset) cast is no longer supported in /codes/unset_cast.php on line 4
   
   Fatal error: The (unset) cast is no longer supported in /codes/unset_cast.php on line 4
   


PHP version change
__________________
This behavior was deprecated in 7.4

This behavior changed in 8.0


Error Messages
______________

`The (unset) cast is deprecated <https://php-errors.readthedocs.io/en/latest/messages/the-(unset)-cast-is-deprecated.html>`_



