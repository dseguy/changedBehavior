.. _final-class-constants:

Final Class Constants
=====================
.. meta::
	:description:
		Final Class Constants: Class constants can be made final, starting with PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Final Class Constants
	:twitter:description: Final Class Constants: Class constants can be made final, starting with PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Final Class Constants
	:og:type: article
	:og:description: Class constants can be made final, starting with PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/finalClassConstants.html
	:og:locale: en

Class constants can be made final, starting with PHP 8.2.

PHP code
________
.. code-block:: php

   <?php
   
   class x {
   	final public const A = 1;
   }
   
   echo x::A;
   
   ?>

Before
______
.. code-block:: output

   PHP Fatal error:  Cannot use 'final' as constant modifier 

After
______
.. code-block:: output

   1


PHP version change
__________________
This behavior changed in 8.1


Error Messages
______________

  + `Cannot use 'final' as constant modifier <https://php-errors.readthedocs.io/en/latest/messages/cannot-use-%27final%27-as-constant-modifier.html>`_



