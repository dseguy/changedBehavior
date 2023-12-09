.. _`vsprint()-requires-an-array`:

vsprint() Requires An Array
===========================
vsprint() used to skip argument type validation, and wrongly report missing arguments, while that argument was not a array. Since PHP 8.0, the error message is clear.

PHP code
________
.. code-block:: php

   <?php
   
   print vsprintf('%04d-%02d-%02d', 1);
   vprintf('%04d-%02d-%02d', 1);
   
   ?>

Before
______
.. code-block:: output

   vsprintf(): Too few arguments

After
______
.. code-block:: output

   vsprintf(): Argument #2 ($values) must be of type array, int given


PHP version change: 8.0

