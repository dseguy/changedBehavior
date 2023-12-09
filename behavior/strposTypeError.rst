.. _`strpos()-emits-typeerror`:

strpos() Emits TypeError
========================
strpos() and stripos() emit a TypeError when the offset is of the wrong type. In PHP 7.4, it emitted a warning.

PHP code
________
.. code-block:: php

   <?php
   strpos('a', 'abc', null);
   ?>

Before
______
.. code-block:: output

   PHP Warning:  strpos() expects parameter 3 to be int, string given

After
______
.. code-block:: output

   PHP Fatal error:  Uncaught TypeError: strpos(): Argument #3 ($offset) must be of type int, string given


PHP version change: 8.0

