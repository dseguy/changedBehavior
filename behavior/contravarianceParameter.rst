.. _`parameter-contravariance`:

Parameter Contravariance
========================
.. meta::
	:description:
		Parameter Contravariance: PHP 7.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Parameter Contravariance
	:twitter:description: Parameter Contravariance: PHP 7
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Parameter Contravariance
	:og:type: article
	:og:description: PHP 7
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/contravarianceParameter.html
	:og:locale: en

PHP 7.4 added the support of parameter type contravariance. The parameter type of a child class may be less strict than the one of the parent. 



In PHP 7.3, the child method must have the same parameter type than the parent.



PHP code
________
.. code-block:: php

   <?php
   
   interface I {}
   
   interface J extends I {}
   
   class X {
   	function foo(j $a) {}
   }
   
   class Y extends X {
   	function foo(i $a) {}
   }
   
   var_dump(new Y);
   
   ?>

Before
______
.. code-block:: output

   PHP Warning:  Declaration of y::foo(i $a) should be compatible with x::foo(j $a) in /codes/contravarianceParameter.php on line 17
   
   Warning: Declaration of y::foo(i $a) should be compatible with x::foo(j $a) in /codes/contravarianceParameter.php on line 17
   object(y)#1 (0) {
   }
   

After
______
.. code-block:: output

   object(y)#1 (0) {
   }
   


PHP version change
__________________
This behavior changed in 7.4



