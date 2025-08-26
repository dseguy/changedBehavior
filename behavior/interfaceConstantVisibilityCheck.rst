.. _`interface-constant-visibility-checks`:

Interface Constant Visibility Checks
====================================
.. meta::
	:description:
		Interface Constant Visibility Checks: PHP checks if the visibility of constants that are also part of an interface are all public.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Interface Constant Visibility Checks
	:twitter:description: Interface Constant Visibility Checks: PHP checks if the visibility of constants that are also part of an interface are all public
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Interface Constant Visibility Checks
	:og:type: article
	:og:description: PHP checks if the visibility of constants that are also part of an interface are all public
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/interfaceConstantVisibilityCheck.html
	:og:locale: en

PHP checks if the visibility of constants that are also part of an interface are all public. If the class constant, in the class, is not public, it is a Fatal Error. This was not checked until PHP 8.3.

PHP code
________
.. code-block:: php

   <?php
   
   interface i {
           public const I = 1;
           public const J = 2;
   }
   
   class x implements i {
           private const I = 1;
           public const J = 2;
   }
   
   print x::J;
   print x::I;
   ?>

Before
______
.. code-block:: output

   Cannot access private constant x::I

After
______
.. code-block:: output

   Access level to x::I must be public (as in interface i)


PHP version change
__________________
This behavior changed in 8.3


Error Messages
______________

  + `0 <https://php-errors.readthedocs.io/en/latest/messages/.html>`_



