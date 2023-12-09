.. _`str_split()-throws-valueerror-with-negative-lengths`:

str_split() Throws ValueError With Negative Lengths
===================================================
str_split() used to emit a warning and return false, when provided with length (2nd argument) as an integer less then 1. In PHP 8.0, it now throws a ValueError.

PHP code
________
.. code-block:: php

   <?php
   str_split('abc', 0);
   ?>

Before
______
.. code-block:: output

   Warning: str_split(): The length of each segment must be greater than zero

After
______
.. code-block:: output

   Fatal error: Uncaught ValueError: str_split(): Argument #2 ($length) must be greater than 0


PHP version change: 8.0

