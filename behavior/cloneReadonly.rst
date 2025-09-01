.. _`can-clone-readonly-properties`:

Can Clone Readonly Properties
=============================
.. meta::
	:description:
		Can Clone Readonly Properties: Readonly properties may be changed, both at constructor and cloning time, since PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Can Clone Readonly Properties
	:twitter:description: Can Clone Readonly Properties: Readonly properties may be changed, both at constructor and cloning time, since PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Can Clone Readonly Properties
	:og:type: article
	:og:description: Readonly properties may be changed, both at constructor and cloning time, since PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/cloneReadonly.html
	:og:locale: en

Readonly properties may be changed, both at constructor and cloning time, since PHP 8.3. Until then, once set, they could never be changed.

PHP code
________
.. code-block:: php

   <?php
   
   class X {
   	readonly int $property;
   	
   	function __construct() {
   		$this->property = 2;
   	}
   	
   	function __clone() {
   		$this->property++;
   	}
   }
   
   $x = new X;
   $y = clone $x;
   
   var_dump($y);
   
   ?>

Before
______
.. code-block:: output

   PHP Fatal error:  Uncaught Error: Cannot modify readonly property x::$p in /codes/cloneReadonly.php:11
   Stack trace:
   #0 /codes/cloneReadonly.php(16): x->__clone()
   #1 {main}
     thrown in /codes/cloneReadonly.php on line 11
   
   Fatal error: Uncaught Error: Cannot modify readonly property x::$p in /codes/cloneReadonly.php:11
   Stack trace:
   #0 /codes/cloneReadonly.php(16): x->__clone()
   #1 {main}
     thrown in /codes/cloneReadonly.php on line 11
   

After
______
.. code-block:: output

   object(x)#2 (1) {
     ["p"]=>
     int(3)
   }
   


PHP version change
__________________
This behavior changed in 8.3



