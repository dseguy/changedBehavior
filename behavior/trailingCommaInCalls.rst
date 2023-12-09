.. _`trailing-comma-in-calls`:

Trailing Comma In Calls
=======================
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


PHP version change: 7.3

