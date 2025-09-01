.. _`removing-$this-from-a-closure-is-deprecated`:

Removing $this from a closure is deprecated
===========================================
.. meta::
	:description:
		Removing $this from a closure is deprecated: When a closure is created in a non-static method, it imports automatically the current object.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Removing $this from a closure is deprecated
	:twitter:description: Removing $this from a closure is deprecated: When a closure is created in a non-static method, it imports automatically the current object
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Removing $this from a closure is deprecated
	:og:type: article
	:og:description: When a closure is created in a non-static method, it imports automatically the current object
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/UnbindingThis.html
	:og:locale: en

When a closure is created in a non-static method, it imports automatically the current object. Nowadays, it is not possible to remove that object from the closure, as it would not run anymore.

PHP code
________
.. code-block:: php

   <?php
   
   class x {
   	private $p = 1;
   	
   	function foo() {
   		return function () { return $this->p; };
   	}
   }
   
   $x = new x;
   $closure = $x->foo();
   print $closure->bindTo(null);
   
   ?>

Before
______
.. code-block:: output

   PHP Deprecated:  Unbinding $this of closure is deprecated
   
   Deprecated: Unbinding $this of closure is deprecated
   PHP Fatal error:  Uncaught Error: Object of class Closure could not be converted to string
   
   Fatal error: Uncaught Error: Object of class Closure could not be converted to string
   

After
______
.. code-block:: output

   PHP Warning:  Cannot unbind $this of closure using $this
   
   Warning: Cannot unbind $this of closure using $this
   


PHP version change
__________________
This behavior changed in 8.0



