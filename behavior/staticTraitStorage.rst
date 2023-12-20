.. _`storage-of-static-properties-trait`:

Storage Of Static Properties Trait
==================================
Static properties defined in a trait used to be merged with any existing static property in a parent class. Since PHP 8.3, the static property is directly related to the importing class, and is made distinct from any pre-existing static class. 

PHP code
________
.. code-block:: php

   <?php
   
   trait t {
       static $T = 1;
   }
   
   class x {
       static $T = 1;
   
       function goo() {
           echo self::$T;
       }
   
   }
   
   class y extends x {
       use t;
       
       function foo() {
           self::$T = 2;
           echo self::$T;
           self::goo();
       }
       
   }
   
   (new y)->foo();

Before
______
.. code-block:: output

   2

After
______
.. code-block:: output

   1


PHP version change
__________________
This behavior changed in 8.3


