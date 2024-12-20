.. _`duplicate-static-definition`:

Duplicate Static Definition
===========================
PHP reports when the same static variable has been declared twice in the same context.

PHP code
________
.. code-block:: php

   <?php
   
   namespace a { 
   	function foo() {
           static $s;
           $s = 1;
   
           static $s;
           echo $s;
       }
   }

Before
______
.. code-block:: output

   11

After
______
.. code-block:: output

   Duplicate declaration of static variable $s


PHP version change
__________________
This behavior changed in 8.3


Error Messages
______________

  + `Duplicate declaration of static variable $%s <https://php-errors.readthedocs.io/en/latest/messages/Duplicate+declaration+of+static+variable+%24%25s.html>`_



