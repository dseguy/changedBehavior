.. _`interface-imported-constant-visibility-is-checked`:

Interface Imported Constant Visibility Is Checked
=================================================
Constant and methods visibility must be public when they are defined in an interface. When they are implemented in a class, they also need to be public. Until PHP 8.3, this was silently ignored, and made public. 

PHP code
________
.. code-block:: php

   <?php
   
   interface i {
       public const IPrivate   = 'private';
       public const IProtected = 'protected';
       public const IPublic    = 'public';
   }
   
   class x implements i {
       private const IPri = 1;
       protected const IPro = 2;
       public const IPub = 3;
   }
   
   echo x::IPrivate . PHP_EOL;
   echo x::IProtected . PHP_EOL;
   echo x::IPublic . PHP_EOL;
   
   ?>
   

Before
______
.. code-block:: output

   3

After
______
.. code-block:: output

   PHP Fatal error:  Access level to x::IPri must be public (as in interface i)


PHP version change
__________________
This behavior changed in 8.3


Error Messages
______________

  + `Access level to x::IPri must be public (as in interface i) <https://php-errors.readthedocs.io/en/latest/messages/access-level-to-%25s%5C%3A%5C%3A%25s-must-be-%25s-%5C%28as-in-%25s-%25s%5C%29%25s.html>`_



