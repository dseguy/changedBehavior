.. _`switch()-changed-comparison-style`:

switch() Changed Comparison Style
=================================
The switch command uses a relaxed comparison style. Hence, the associated cases changed in PHP 8.0, whenever they use the special values such a 0, empty string '' or null.

PHP code
________
.. code-block:: php

   <?php
   
   $a = 0;
   switch ($a) {
       case 'a': 
           print 'a'.PHP_EOL;
           break;
   
       case 0: 
           print 'Null'.PHP_EOL;
           break;
           
       default:
           print 'Default'.PHP_EOL;
   }
   
   ?>

Before
______
.. code-block:: output

   a

After
______
.. code-block:: output

   Null


PHP version change
__________________
This behavior changed in 8.0


