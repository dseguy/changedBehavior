.. _`mixed-is-now-a-keyword`:

mixed Is Now A Keyword
======================
mixed was introduced in PHP 8.0 as a new type. As a side effect, it is now a PHP keyword, and it is not possible to create classes, functions or constants with that name.

PHP code
________
.. code-block:: php

   <?php
   
   class mixed {
   	function __construct() {
   		echo __METHOD__;
   	}
   }
   
   new mixed;
   
   ?>

Before
______
.. code-block:: output

   mixed::__construct

After
______
.. code-block:: output

   PHP Fatal error:  Cannot use 'mixed' as class name as it is reserved in /codes/mixedKeyword.php on line 3
   
   Fatal error: Cannot use 'mixed' as class name as it is reserved in /codes/mixedKeyword.php on line 3
   


PHP version change
__________________
This behavior changed in 8.0


Error Messages
______________

Cannot use 'mixed' as class name as it is reserved


