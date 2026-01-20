.. _`old-constructors`:

Old Constructors
================
.. meta::
	:description:
		Old Constructors: In PHP 4, the constructor was the method of the same name as the class.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Old Constructors
	:twitter:description: Old Constructors: In PHP 4, the constructor was the method of the same name as the class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Old Constructors
	:og:type: article
	:og:description: In PHP 4, the constructor was the method of the same name as the class
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/OldConstructors.html
	:og:locale: en

In PHP 4, the constructor was the method of the same name as the class. They were called during instantiation of an object. In PHP 7, there were replaced with the ``__construct`` method, and were used in case of fallback.



Old constructors are also called ``PHP 4 constructor``, as they were used during that time; they are also called eponymous constructors, as they use the same name as the class. 

PHP code
________
.. code-block:: php

   <?php
   
   class X {
   	function x() {
   		print __METHOD__;
   	}
   
   	function foo() {
   		print __METHOD__;
   	}
   }
   
   (new x())->foo();
   ?>

Before
______
.. code-block:: output

   PHP Deprecated:  Methods with the same name as their class will not be constructors in a future version of PHP; x has a deprecated constructor
   
   Deprecated: Methods with the same name as their class will not be constructors in a future version of PHP; x has a deprecated constructor
   x::xx::foo

After
______
.. code-block:: output

   x::foo


PHP version change
__________________
This behavior changed in 8.0


Error Messages
______________

  + `Methods with the same name as their class will not be constructors in a future version of PHP <https://php-errors.readthedocs.io/en/latest/messages/methods-with-the-same-name-as-their-class-will-not-be-constructors-in-a-future-version-of-php%3B-%25s-has-a-deprecated-constructor.html>`_


Analyzer
_________

  + `Classes/OldStyleConstructor <https://exakat.readthedocs.io/en/latest/Reference/Rules/Classes/OldStyleConstructor.html>`_



