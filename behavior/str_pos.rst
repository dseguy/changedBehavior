.. _`str_pos()-requires-only-strings`:

str_pos() Requires Only Strings
===============================
Until PHP 8.0, str_pos() accepted integers as second argument, and would convert them into their equivalent ASCII char. This was a hidden feature of PHP.



Since PHP 8.0, the integer is converted to string as is, and used for the search.

PHP code
________
.. code-block:: php

   <?php
   
   var_dump(strpos('abc ', 32));
   
   

Before
______
.. code-block:: output

   PHP Deprecated:  strpos(): Non-string needles will be interpreted as strings in the future. Use an explicit chr() call to preserve the current behavior in /codes/str_pos.php on line 3
   
   Deprecated: strpos(): Non-string needles will be interpreted as strings in the future. Use an explicit chr() call to preserve the current behavior in /codes/str_pos.php on line 3
   int(3)
   

After
______
.. code-block:: output

   bool(false)
   


PHP version change
__________________
This behavior changed in 8.0


Error Messages
______________

`strpos(): Non-string needles will be interpreted as strings in the future. Use an explicit chr() call to preserve the current behavior <https://php-errors.readthedocs.io/en/latest/messages/strpos():-non-string-needles-will-be-interpreted-as-strings-in-the-future.-use-an-explicit-chr()-call-to-preserve-the-current-behavior.html>`_



