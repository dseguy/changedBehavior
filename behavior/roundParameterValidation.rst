.. _`round()-mode-validation`:

round() Mode Validation
=======================
round() function has four modes, defined with 4 constants. When the 3rd argument is not one of those four constants, PHP used to silently use PHP_ROUND_HALF_UP as default value. In PHP 8.4, a ValueError is provided.

PHP code
________
.. code-block:: php

   <?php
   
   print $a = round(1.2, 2, 333);
   
   ?>

Before
______
.. code-block:: output

   1

After
______
.. code-block:: output

   round(): Argument #3 ($mode) must be a valid rounding mode (PHP_ROUND_*)


PHP version change
__________________
This behavior changed in 8.4


See Also
________

* `round() <https://www.php.net/round>`_


Error Messages
______________

  + `must be a valid rounding mode (RoundingMode::*) <https://php-errors.readthedocs.io/en/latest/messages/must-be-a-valid-rounding-mode-%28roundingmode%5C%3A%5C%3A%2A%29.html>`_



