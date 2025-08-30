.. _`indirect-modification-in-clone`:

Indirect Modification In Clone
==============================
.. meta::
	:description:
		Indirect Modification In Clone: __clone is used to apply modifications during the cloning operation.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Indirect Modification In Clone
	:twitter:description: Indirect Modification In Clone: __clone is used to apply modifications during the cloning operation
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Indirect Modification In Clone
	:og:type: article
	:og:description: __clone is used to apply modifications during the cloning operation
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/indirectModificationInClone.html
	:og:locale: en

__clone is used to apply modifications during the cloning operation. It could also be used to change the original object.

PHP code
________
.. code-block:: php

   <?php
   
   class X {
       readonly public int $p;
       
       function foo() {
           $this->p = 2;
       }
       
       function __clone() {
           $ref = &$this->p;
       }
   }
   
   $x = new x;
   clone $x;

Before
______
.. code-block:: output

   PHP Parse error:  syntax error, unexpected identifier "readonly", expecting "function" or "const" 
   
   Parse error: syntax error, unexpected identifier "readonly", expecting "function" or "const" 
   

After
______
.. code-block:: output

   PHP Fatal error:  Uncaught Error: Cannot indirectly modify readonly property X::$p
   
   Fatal error: Uncaught Error: Cannot indirectly modify readonly property X::$p
   


PHP version change
__________________
This behavior changed in 8.1


Error Messages
______________

  + `0 <https://php-errors.readthedocs.io/en/latest/messages/.html>`_



