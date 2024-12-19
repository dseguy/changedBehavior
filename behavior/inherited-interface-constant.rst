.. _`cannot-override-constant-from-interface`:

Cannot override Constant From Interface
=======================================
Until PHP 8.1, it was not possible to override a constant that was defined in an interface. Since PHP 8.1, it is possible to override it, and to change its value, but not its type or visibility.

PHP code
________
.. code-block:: php

   <?php
   interface i {
       const A = 1;
   }
   
   class X implements i { 
       const A = 2;
   }
   
   echo X::A;

Before
______
.. code-block:: output

   PHP Fatal error:  Cannot inherit previously-inherited or override constant A from interface i in /codes/inherited-interface-constant.php on line 6
   
   Fatal error: Cannot inherit previously-inherited or override constant A from interface i in /codes/inherited-interface-constant.php on line 6
   

After
______
.. code-block:: output

   2


PHP version change
__________________
This behavior changed in 8.1


