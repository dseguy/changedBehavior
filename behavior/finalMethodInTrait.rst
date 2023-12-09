.. _`final-method-in-trait`:

Final Method In Trait
=====================
Trait methods can be named final, when importing them as a trait alias. It was explicitely forbidden until PHP 8.3. This has nothing to do with the final keyword.

PHP code
________
.. code-block:: php

   <?php
   
   trait t {
       function foo() {}
   }
   
   trait t2 {
       function foo() {}
   }
   
   class A {
           use t, t2 { t::foo as final; }
   }
   ?>

Before
______
.. code-block:: output

   

After
______
.. code-block:: output

   


PHP version change: 8.3
Error Messages
________

Cannot use 'final' as method modifier


