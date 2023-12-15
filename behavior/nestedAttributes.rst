.. _`nested-attributes`:

Nested Attributes
=================
Attributes can handle nested ``new`` calls since PHP 8.1. They can use literals, constants and now, full objects as part of the attribute expression. 

PHP code
________
.. code-block:: php

   <?php
   
   #[JoinTable(joinColumns: [new JoinColumn])]
   class x {
   	function __construct() {
   		print __METHOD__;
   	}
   }
   
   new x;
   
   ?>

Before
______
.. code-block:: output

   PHP Fatal error:  Constant expression contains invalid operations in /Users/famille/Desktop/changedBehavior/codes/nestedAttributes.php on line 4
   
   Fatal error: Constant expression contains invalid operations in /Users/famille/Desktop/changedBehavior/codes/nestedAttributes.php on line 4
   

After
______
.. code-block:: output

   x::__construct


PHP version change: 8.1

