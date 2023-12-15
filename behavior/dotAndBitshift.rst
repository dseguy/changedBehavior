.. _`dot-and-bitshift-priority`:

Dot And Bitshift Priority
=========================
The dot (concatenation) and bitshift (<< and >>) operators have a distinct priority in PHP 

PHP code
________
.. code-block:: php

   <?php
   echo 3 . 4 << 1;
   ?>

Before
______
.. code-block:: output

   68

After
______
.. code-block:: output

   38


PHP version change: 8.0

See Also
________

* `Other incompatible Changes <https://www.php.net/manual/en/migration80.incompatible.php>`_
* `Bitwise Operators <https://www.php.net/manual/en/language.operators.bitwise.php>`_


