.. _`static-variable-accepts-functioncalls-as-default`:

Static Variable Accepts Functioncalls As Default
================================================
Static variables are actually variables: as such, they can be inited with the result of a functioncall. 



Until PHP 8.3, their default values were using static constant expression, built around constants and operators. 



Since PHP 8.3, it is possible to also set their first value as a function or method call.



Properties and parameters are not allowed to use these expressions: they must be valid at compile time.

PHP code
________
.. code-block:: php

   <?php
   
   function foo() {
   	static $x = goo(1);
   	
   	return ++$x;
   }
   
   function goo() {
   	return 3;
   }
   
   echo foo();
   echo foo();
   
   ?>

Before
______
.. code-block:: output

   PHP Fatal error:  Constant expression contains invalid operations in /codes/staticVariableWithArbitraryDefault.php on line 4
   
   Fatal error: Constant expression contains invalid operations in /codes/staticVariableWithArbitraryDefault.php on line 4
   

After
______
.. code-block:: output

   45


PHP version change
__________________
This behavior changed in 8.3


