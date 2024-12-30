.. _`throw-is-an-expression`:

throw Is An Expression
======================
``throw`` was a standalone expression: it needed to be alone, between semicolons (or equivalents). 



Since PHP 8.0, throw may be included in another expression. This is useful with ``or``, or the coalesce operator, to execute the expression when a value is missing or failing.

PHP code
________
.. code-block:: php

   <?php
   
   foo() or throw new \Exception();
   
   $x = $_GET['x'] ?? throw new \Exception('Missing value for x');
   
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


