.. _duplicate-static-definition:

Duplicate Static Definition
===========================
.. meta::
	:description:
		Duplicate Static Definition: PHP reports when the same static variable has been declared twice in the same context.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Duplicate Static Definition
	:twitter:description: Duplicate Static Definition: PHP reports when the same static variable has been declared twice in the same context
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Duplicate Static Definition
	:og:type: article
	:og:description: PHP reports when the same static variable has been declared twice in the same context
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/duplicateStaticDefinition.html
	:og:locale: en

PHP reports when the same static variable has been declared twice in the same context.

PHP code
________
.. code-block:: php

   <?php
   
   namespace A { 
   	function foo() {
           static $s;
           $s = 1;
   
           static $s;
           echo $s;
       }
   }
   
   ?>

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

  + `Duplicate declaration of static variable $%s <https://php-errors.readthedocs.io/en/latest/messages/duplicate-declaration-of-static-variable-%24%25s.html>`_


Analyzer
_________

  + `Variables/RedeclaredStaticVariable <https://exakat.readthedocs.io/en/latest/Reference/Rules/Variables/RedeclaredStaticVariable.html>`_



