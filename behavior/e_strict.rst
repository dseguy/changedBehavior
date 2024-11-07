.. _`e_strict-is-deprecated`:

E_STRICT Is Deprecated
======================


PHP code
________
.. code-block:: php

   <?php
   
   var_dump(error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT));
   
   ?>

Before
______
.. code-block:: output

   int(32767)
   

After
______
.. code-block:: output

   PHP Deprecated:  Constant E_STRICT is deprecated in /codes/e_strict.php on line 3
   
   Deprecated: Constant E_STRICT is deprecated in /codes/e_strict.php on line 3
   int(30719)
   


PHP version change
__________________
This behavior was deprecated in 8.4

This behavior changed in 8.4


See Also
________

* `0 <https://php.watch/versions/8.4/E_STRICT-deprecated>`_


