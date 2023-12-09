.. _`vsprintf()-returns-empty-string-on-error`:

vsprintf() Returns Empty String On Error
========================================
vsprintf() always returns a string, or raise an exception. Until PHP 8.0, it used to return false in case of error.

PHP code
________
.. code-block:: php

   <?php
   
   var_dump(vsprintf(%04d-%02d-%02d, []));
   
   ?>

Before
______
.. code-block:: output

   Warning: vsprintf(): Too few arguments in /in/1pYdW on line 3
   bool(false)

After
______
.. code-block:: output

   Fatal error: Uncaught ValueError: The arguments array must contain 3 items, 0 given


PHP version change: 8.0

