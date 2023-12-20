.. _`throw-is-an-expression`:

throw Is An Expression
======================


PHP code
________
.. code-block:: php

   <?php
   
   foo() or throw new \Exception();
   
   ?>

Before
______
.. code-block:: output

   PHP Parse error:  syntax error, unexpected 'throw' (T_THROW) in /codes/throwIsAnExpression.php on line 3
   
   Parse error: syntax error, unexpected 'throw' (T_THROW) in /codes/throwIsAnExpression.php on line 3
   

After
______
.. code-block:: output

   


PHP version change
__________________
This behavior changed in 8.0


See Also
________

* `Exceptions <https://www.php.net/manual/en/language.exceptions.php>`_


