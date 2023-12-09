.. _`catch-without-variable`:

Catch Without Variable
======================
A catch clause doesn't require a storing variable anymore. It may simply omit it. The exception is then caught, but not provided in the clause.

PHP code
________
.. code-block:: php

   <?php
   
   try {
       throw new Exception('Error');
   } catch (Exception) {
       print 'Exception caught';
   }
   
   ?>

Before
______
.. code-block:: output

   Parse error: syntax error, unexpected ')', expecting '|' or variable (T_VARIABLE)

After
______
.. code-block:: output

   Exception caught


PHP version change: 8.0

