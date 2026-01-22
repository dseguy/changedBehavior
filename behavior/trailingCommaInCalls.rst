.. _trailing-comma-in-calls:

Trailing Comma In Calls
=======================
.. meta::
	:description:
		Trailing Comma In Calls: Trailing commas in parameters is the last parameter left empty.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Trailing Comma In Calls
	:twitter:description: Trailing Comma In Calls: Trailing commas in parameters is the last parameter left empty
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Trailing Comma In Calls
	:og:type: article
	:og:description: Trailing commas in parameters is the last parameter left empty
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/trailingCommaInCalls.html
	:og:locale: en

Trailing commas in parameters is the last parameter left empty. This last parameter is not transmitted, so the last comma has no effect. This feature is useful when parameters are kept on a different line : the last argument has now also a comma, and adding one extra argument will yield a one line diff, compared to the previous version. Without it, the diff would be two lines, and include the preceding line. 

PHP code
________
.. code-block:: php

   <?php
   
   function foo($a,
                $b,
                $c) { echo __METHOD__; }
   
   echo foo(1,
            2,
            3,
            );
   
   ?>

Before
______
.. code-block:: output

   PHP Parse error:  syntax error, unexpected ')', expecting variable (T_VARIABLE)

After
______
.. code-block:: output

   foo


PHP version change
__________________
This behavior changed in 7.3


Error Messages
______________

  + `syntax error, unexpected ')', expecting variable (T_VARIABLE) <https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-%27%29%27%2C-expecting-variable-%28t_variable%29.html>`_


Analyzer
_________

  + `Php/TrailingComma <https://exakat.readthedocs.io/en/latest/Reference/Rules/Php/TrailingComma.html>`_



