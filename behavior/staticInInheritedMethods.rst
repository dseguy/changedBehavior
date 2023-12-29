.. _`static-variables-are-linked-to-their-method`:

Static Variables Are Linked To Their Method
===========================================
Static variables are linked to their method: any call to that method should access the same property. 



Until PHP 8.1, the static variables used to be linked to the class: this meant that changing the call to the class lead to different values of the static variable. The new behavior is the expcted one. 

PHP code
________
.. code-block:: php

   <?php
   class A {
       public static function counter() {
           static $counter = 0;
           $counter++;
           return $counter;
       }
   }
   class B extends A {}
   var_dump(A::counter()); // int(1)
   var_dump(A::counter()); // int(2)
   var_dump(B::counter()); // int(3), previously int(1)
   var_dump(B::counter()); // int(4), previously int(2)
   ?>

Before
______
.. code-block:: output

   int(1)
   int(2)
   int(1)
   int(2)
   

After
______
.. code-block:: output

   int(1)
   int(2)
   int(3)
   int(4)
   


PHP version change
__________________
This behavior changed in 8.1


