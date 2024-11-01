.. _`heredoc-syntax-in-an-array`:

Heredoc Syntax In An Array
==========================
Until PHP 7.2, it is only possible to use the HEREDOC (and NOWDOC) syntax with a final semicolon. This means it was impossible to use that syntax in an array, a list of arguments, or other context that do not finish the expression with a semicolon.

PHP code
________
.. code-block:: php

   <?php
   
   $a = array(<<<HEREDOC
   A
   HEREDOC,
   );
   
   print_r($a);
   
   ?>

Before
______
.. code-block:: output

   PHP Parse error:  syntax error in /codes/heredoc_in_array.php on line 10
   
   Parse error: syntax error in /codes/heredoc_in_array.php on line 10
   

After
______
.. code-block:: output

   Array
   (
       [0] => A
   )
   


PHP version change
__________________
This behavior changed in 7.3


Error Messages
______________

  + `syntax error <https://php-errors.readthedocs.io/en/latest/messages/syntax error.html>`_



