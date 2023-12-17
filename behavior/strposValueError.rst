.. _`strpos()-emits-valueerror`:

strpos() Emits ValueError
=========================
strpos() and stripos() emits a ValueError when the offset is out of range. In PHP 7.4, it emitted a warning.

PHP code
________
.. code-block:: php

   <?php
   strpos('a', 'abc', 17);
   ?>

Before
______
.. code-block:: output

   PHP Warning:  strpos(): Offset not contained in string in /codes/strposValueError.php on line 3
   
   Warning: strpos(): Offset not contained in string in /codes/strposValueError.php on line 3
   bool(false)

After
______
.. code-block:: output

   PHP Fatal error:  Uncaught ValueError: strpos(): Argument #3 ($offset) must be contained in argument #1 ($haystack) 


PHP version change: 8.0

