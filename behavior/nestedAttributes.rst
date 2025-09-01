.. _`nested-attributes`:

Nested Attributes
=================
.. meta::
	:description:
		Nested Attributes: Attributes can handle nested ``new`` calls since PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Nested Attributes
	:twitter:description: Nested Attributes: Attributes can handle nested ``new`` calls since PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Nested Attributes
	:og:type: article
	:og:description: Attributes can handle nested ``new`` calls since PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/nestedAttributes.html
	:og:locale: en

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

   PHP Fatal error:  Constant expression contains invalid operations in /codes/nestedAttributes.php on line 4
   
   Fatal error: Constant expression contains invalid operations in /codes/nestedAttributes.php on line 4
   

After
______
.. code-block:: output

   x::__construct


PHP version change
__________________
This behavior changed in 8.1



