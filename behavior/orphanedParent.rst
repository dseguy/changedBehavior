.. _`orphaned-parent`:

Orphaned Parent
===============
Calling the parent class of a class without parent is not possible. It used to be a deprecated error, where the code would keep on executing. In PHP 8.0, it stops the execution entirely.

PHP code
________
.. code-block:: php

   <?php
   
   class x {
           function __construct() {
                   parent::__construct();
           }
   }
   
   new x;
   
   ?>

Before
______
.. code-block:: output

   Deprecated: Cannot use "parent" when current class scope has no parent

After
______
.. code-block:: output

   PHP Fatal error:  Cannot use "parent" when current class scope has no parent


PHP version change
__________________
This behavior was deprecated in 7.4

This behavior changed in 8.0


Error Messages
______________

Cannot use "parent" when current class scope has no parent


