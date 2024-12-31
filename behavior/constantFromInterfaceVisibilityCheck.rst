.. _`interface-imported-constant-visibility-is-checked`:

Interface Imported Constant Visibility Is Checked
=================================================
.. meta::
	:description:
		Interface Imported Constant Visibility Is Checked: Constant and methods visibility must be public when they are defined in an interface.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Interface Imported Constant Visibility Is Checked
	:twitter:description: Interface Imported Constant Visibility Is Checked: Constant and methods visibility must be public when they are defined in an interface
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Interface Imported Constant Visibility Is Checked
	:og:type: article
	:og:description: Constant and methods visibility must be public when they are defined in an interface
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/constantFromInterfaceVisibilityCheck.html
	:og:locale: en

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

  + `Access level to x::IPri must be public (as in interface i) <https://php-errors.readthedocs.io/en/latest/messages/access-level-to-%25s%3A%3A%25s-must-be-%25s-%28as-in-%25s-%25s%29%25s.html>`_



