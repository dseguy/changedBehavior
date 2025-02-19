.. _`old-style-constructors`:

Old Style Constructors
======================
.. meta::
	:description:
		Old Style Constructors: Since PHP 4, the constructor of a class was the method with the same name as the class.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Old Style Constructors
	:twitter:description: Old Style Constructors: Since PHP 4, the constructor of a class was the method with the same name as the class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Old Style Constructors
	:og:type: article
	:og:description: Since PHP 4, the constructor of a class was the method with the same name as the class
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/OldConstructors.html
	:og:locale: en

Since PHP 4, the constructor of a class was the method with the same name as the class. In PHP 7, it was changed to use the ``__construct`` method by default, and, in case this is missing and for backward compatibility reasons, use the method with the same name. In PHP 8.0, this old style constructor is not used anymore.

PHP code
________
.. code-block:: php

   <?php
   
   class X {
   	function x() {
   		print __METHOD__;
   	}
   }
   
   new X();
   
   ?>

Before
______
.. code-block:: output

   x::x

After
______
.. code-block:: output

   


PHP version change
__________________
This behavior was deprecated in Deprecated: Methods with the same name as their class will not be constructors in a future version of PHP; x has a deprecated constructor

This behavior changed in 8.0


