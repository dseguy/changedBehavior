.. _`implode()-arguments-order`:

implode() Arguments Order
=========================
.. meta::
	:description:
		implode() Arguments Order: Until PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: implode() Arguments Order
	:twitter:description: implode() Arguments Order: Until PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: implode() Arguments Order
	:og:type: article
	:og:description: Until PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/imploderOrder.html
	:og:locale: en

Until PHP 8.0, it was possible to call implode() with a random order of argument : string first, or array first. PHP would figure out which one to use. 



In PHP 8.0, it is now compulsory to put the string in the first place, as the types are checked. Or used named parameters.

PHP code
________
.. code-block:: php

   <?php
   
   print_r(implode([1,2], '3'));
   
   ?>

Before
______
.. code-block:: output

   PHP Deprecated:  implode(): Passing glue string after array is deprecated. Swap the parameters in /codes/imploderOrder.php on line 3
   
   Deprecated: implode(): Passing glue string after array is deprecated. Swap the parameters in /codes/imploderOrder.php on line 3
   132

After
______
.. code-block:: output

   PHP Fatal error:  Uncaught TypeError: implode(): Argument #2 ($array) must be of type ?array, string given in /codes/imploderOrder.php:3
   Stack trace:
   #0 /codes/imploderOrder.php(3): implode(Array, '3')
   #1 {main}
     thrown in /codes/imploderOrder.php on line 3
   
   Fatal error: Uncaught TypeError: implode(): Argument #2 ($array) must be of type ?array, string given in /codes/imploderOrder.php:3
   Stack trace:
   #0 /codes/imploderOrder.php(3): implode(Array, '3')
   #1 {main}
     thrown in /codes/imploderOrder.php on line 3
   


PHP version change
__________________
This behavior changed in 8.0


Error Messages
______________

  + `implode(): Argument #2 ($array) must be of type ?array, string given <https://php-errors.readthedocs.io/en/latest/messages/must-be-of-type-%25s%2C-%25s-given.html>`_



