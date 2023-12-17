.. _`never-keyword`:

never Keyword
=============
Never became a PHP reserved keyword in PHP 8.1. It is used as special type, and cannot be used anymore for function names, classnames, etc.

PHP code
________
.. code-block:: php

   <?php
   
   class never {
   	function __construct() {
   		print __METHOD__;
   	}
   }
   
   new never;
   
   ?>

Before
______
.. code-block:: output

   never::__construct

After
______
.. code-block:: output

   PHP Fatal error:  Cannot use 'never' as class name as it is reserved in /codes/neverKeyword.php on line 3
   
   Fatal error: Cannot use 'never' as class name as it is reserved in /codes/neverKeyword.php on line 3
   


PHP version change: 8.1

