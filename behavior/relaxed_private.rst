.. _`relaxed-naming-with-class-constant`:

Relaxed Naming With Class Constant
==================================
Relaxed naming is the possibility to use PHP keywords as method or class constant names (for properties, the ``$`` has allowed it for a long time).



``private``, ``protected`` and ``public`` were not valid class constant names, until PHP 8.3. They were eligible to be method names, though.





PHP code
________
.. code-block:: php

   <?php
   
   class x {
       public const string private = 'protected';
   }
   
   echo x::private;
   
   ?>

Before
______
.. code-block:: output

   PHP Parse error:  syntax error, unexpected token "private", expecting "=" in /codes/relaxed_private.php on line 4
   
   Parse error: syntax error, unexpected token "private", expecting "=" in /codes/relaxed_private.php on line 4
   

After
______
.. code-block:: output

   protected


PHP version change
__________________
This behavior changed in 8.3


