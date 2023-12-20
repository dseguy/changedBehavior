.. _`in_array()-doesn't-confuse-0-and-empty-string`:

in_array() Doesn't Confuse 0 And Empty String
=============================================
in_array() makes a relaxed comparison of values in its arguments. When there are 0 and empty strings, those used to be considered identical in PHP 7 and they are now distinct in PHP 8. 



This behavior change doesn't impact calls to in_array() with the third argument ``strict_comparison``. That feature is unchanged in PHP 8.



PHP code
________
.. code-block:: php

   <?php
   
   var_dump(in_array('', [ 0]));
   
   ?>

Before
______
.. code-block:: output

   bool(true)
   

After
______
.. code-block:: output

   bool(false)
   


PHP version change
__________________
This behavior changed in 8.0


See Also
________

* `in_array <https://www.php.net/manual/en/function.in-array.php>`_


