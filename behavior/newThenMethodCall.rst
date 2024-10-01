.. _`call-method-on-new`:

Call Method On New
==================
It was not possible to call a method directly after instantiating an object: the instantiation had to be done within a parenthesis. 



In PHP 8.4, it is now possible to call directly a method after instantiation, as long as the new call includes the parenthesises. 

PHP code
________
.. code-block:: php

   <?php
   
   class x {} 
   
   new x()->a();
   
   // This is not possible: it's missing the parenthesis
   //new x->a();
   
   ?>

Before
______
.. code-block:: output

   PHP Parse error:  syntax error, unexpected token -> in /codes/newThenMethodCall.php on line 3
   
   Parse error: syntax error, unexpected token -> in /codes/newThenMethodCall.php on line 3
   

After
______
.. code-block:: output

   


PHP version change
__________________
This behavior changed in 8.4


