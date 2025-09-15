.. _`returntype-covariance`:

Returntype Covariance
=====================
.. meta::
	:description:
		Returntype Covariance: PHP 7.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Returntype Covariance
	:twitter:description: Returntype Covariance: PHP 7
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Returntype Covariance
	:og:type: article
	:og:description: PHP 7
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/covarianceReturntype.html
	:og:locale: en

PHP 7.4 added the support of return type covariance. The return type of a child class may be more strict than the one of the parent. 



In PHP 7.3, the child method must have the same return type than the parent.



PHP code
________
.. code-block:: php

   <?php
   
   interface I {}
   
   interface J extends I {}
   
   class X {
   	function foo() : I {
   	
   	}
   }
   
   class Y extends X {
   	function foo() : J {
   	
   	}
   }
   
   var_dump(new Y);
   
   ?>

Before
______
.. code-block:: output

   PHP Fatal error:  Declaration of y::foo(): j must be compatible with x::foo(): i 
   
   Fatal error: Declaration of y::foo(): j must be compatible with x::foo(): i 
   

After
______
.. code-block:: output

   object(y)#1 (0) {
   }
   


PHP version change
__________________
This behavior changed in 7.4



