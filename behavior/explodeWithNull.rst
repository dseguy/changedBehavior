.. _`cannot-explode()-null`:

Cannot Explode() Null
=====================
Null used to be a valid argument for explode(), used as an empty string. Nowadays, PHP requires an actual string to explode.

PHP code
________
.. code-block:: php

   <?php
   
   var_dump(explode(';', null));
   
   ?>

Before
______
.. code-block:: output

   array(1) {
     [0]=>
     string(0) "" 
   }
   

After
______
.. code-block:: output

   PHP Deprecated:  explode(): Passing null to parameter #2 ($string) of type string is deprecated in /codes/explodeWithNull.php on line 3
   
   Deprecated: explode(): Passing null to parameter #2 ($string) of type string is deprecated in /codes/explodeWithNull.php on line 3
   array(1) {
     [0]=>
     string(0) "" 
   }
   


PHP version change
__________________
This behavior changed in 8.1


