.. _`$globals-assignement`:

$GLOBALS Assignement
====================
It is not possible to assign the ``$GLOBALS`` variable anymore. The individual values may still be assigned directly. 

PHP code
________
.. code-block:: php

   <?php
   
   $GLOBALS['a']  = 1;
   
   $b = &$GLOBALS;
   $b = array();
   
   print_r($GLOBALS);
   
   ?>

Before
______
.. code-block:: output

   Array
   (
   )
   

After
______
.. code-block:: output

   PHP Fatal error:  Cannot acquire reference to $GLOBALS


PHP version change: 8.1
Error Messages
________

Cannot acquire reference to $GLOBALS


