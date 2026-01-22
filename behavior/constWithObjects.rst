.. _constants-with-objects:

Constants With Objects
======================
.. meta::
	:description:
		Constants With Objects: Global constants are allowed to use an object, starting with PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Constants With Objects
	:twitter:description: Constants With Objects: Global constants are allowed to use an object, starting with PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Constants With Objects
	:og:type: article
	:og:description: Global constants are allowed to use an object, starting with PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/constWithObjects.html
	:og:locale: en

Global constants are allowed to use an object, starting with PHP 8.1. The object must be instantiated with only constants values, like literals and other constants.



Class constant are not allowed to use the ``new`` keyword.

PHP code
________
.. code-block:: php

   <?php
   
   const A = new stdclass();
   
   var_dump(A);
   
   ?>

Before
______
.. code-block:: output

   PHP Fatal error:  Constant expression contains invalid operations
   
   Fatal error: Constant expression contains invalid operations
   

After
______
.. code-block:: output

   object(stdClass)#1 (0) {
   }
   


PHP version change
__________________
This behavior changed in 8.1


Error Messages
______________

  + `Constant expression contains invalid operations <https://php-errors.readthedocs.io/en/latest/messages/constant-expression-contains-invalid-operations.html>`_


Analyzer
_________

  + `Php/NewInitializers <https://exakat.readthedocs.io/en/latest/Reference/Rules/Php/NewInitializers.html>`_



