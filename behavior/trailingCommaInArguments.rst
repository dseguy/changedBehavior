.. _`trailing-comma-in-arguments`:

Trailing Comma In Arguments
===========================
Trailing commas in arguments is the last argument left empty. This last argument is not transmitted, so the last comma has no effect. This feature is useful when arguments are kept on a different line : the last argument has now also a comma, and adding one extra argument will yield a one line diff, compared to the previous version. Without it, the diff would be two lines, and include the preceding line. 

PHP code
________
.. code-block:: php

   <?php
   
   function foo($a,
                $b,
                $c,
                 ) { echo __METHOD__; }
   
   echo foo(1);
   
   ?>

Before
______
.. code-block:: output

   PHP Parse error:  syntax error, unexpected ')', expecting variable (T_VARIABLE)

After
______
.. code-block:: output

   foo


PHP version change: 8.0

