.. _`throw-is-an-expression`:

throw Is An Expression
======================
.. meta::
	:description:
		throw Is An Expression: ``throw`` was a standalone expression: it needed to be alone, between semicolons (or equivalents).
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: throw Is An Expression
	:twitter:description: throw Is An Expression: ``throw`` was a standalone expression: it needed to be alone, between semicolons (or equivalents)
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: throw Is An Expression
	:og:type: article
	:og:description: ``throw`` was a standalone expression: it needed to be alone, between semicolons (or equivalents)
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/throwIsAnExpression.html
	:og:locale: en

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


Error Messages
______________

  + `syntax error, unexepected 'throw' (T_THROW) <https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-%27throw%27-%28t_throw%29.html>`_



