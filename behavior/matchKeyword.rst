.. _`match-is-now-a-keyword`:

match Is Now A Keyword
======================
Match() was introduced in PHP 8.0 as a new command. As a side effect, it is now a PHP keyword, and it is not possible to create classes, functions or constants with that name.

PHP code
________
.. code-block:: php

   <?php
   
   function match() {
   	echo __FUNCTION__;
   }
   
   match();
   
   ?>

Before
______
.. code-block:: output

   match

After
______
.. code-block:: output

   PHP Parse error:  syntax error, unexpected token "match", expecting "(" in /codes/matchKeyword.php on line 3
   
   Parse error: syntax error, unexpected token "match", expecting "(" in /codes/matchKeyword.php on line 3
   


PHP version change
__________________
This behavior changed in 8.0


