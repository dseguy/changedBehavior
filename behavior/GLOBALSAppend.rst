.. _appending-to-$globals:

Appending To $GLOBALS
=====================
.. meta::
	:description:
		Appending To $GLOBALS: $GLOBALS is not a regular array: each of its entries is really a reference to a variable in the global scope, identified by its name.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Appending To $GLOBALS
	:twitter:description: Appending To $GLOBALS: $GLOBALS is not a regular array: each of its entries is really a reference to a variable in the global scope, identified by its name
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Appending To $GLOBALS
	:og:type: article
	:og:description: $GLOBALS is not a regular array: each of its entries is really a reference to a variable in the global scope, identified by its name
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/GLOBALSAppend.html
	:og:locale: en

$GLOBALS is not a regular array: each of its entries is really a reference to a variable in the global scope, identified by its name. Appending to it with the empty-bracket operator, which would normally pick the next integer key, has no matching global variable to bind to. Before PHP 8.1, this meaningless operation was silently tolerated, and created a global variable literally named "0". As of PHP 8.1, $GLOBALS is treated more strictly by the compiler, and this and several other previously-tolerated usages now raise a compile-time error instead.

PHP code
________
.. code-block:: php

   <?php
   
   $GLOBALS[] = 'value';
   
   ?>

Before
______
.. code-block:: output

   

After
______
.. code-block:: output

   PHP Fatal error:  Cannot append to $GLOBALS
   


PHP version change
__________________
This behavior changed in 8.1


Error Messages
______________

  + `Cannot append to $GLOBALS <https://php-errors.readthedocs.io/en/latest/messages/cannot-append-to-%24globals.html>`_



