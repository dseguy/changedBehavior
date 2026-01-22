.. _old-style-constructor:

Old Style Constructor
=====================
.. meta::
	:description:
		Old Style Constructor: Since PHP 5, the constructor method of a class was the eponymous method: the method with the same name as the class.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Old Style Constructor
	:twitter:description: Old Style Constructor: Since PHP 5, the constructor method of a class was the eponymous method: the method with the same name as the class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Old Style Constructor
	:og:type: article
	:og:description: Since PHP 5, the constructor method of a class was the eponymous method: the method with the same name as the class
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/oldStyleConstructor.html
	:og:locale: en

Since PHP 5, the constructor method of a class was the eponymous method: the method with the same name as the class. 



In PHP 7, this feature was deprecated in favor of using the ``__construct``. During that phase, ``__construct`` had priority over the eponymous function, but the latter was still used in case of fallback, for backward compatibility.



In PHP 8, the eponymous method is now a normal method.

PHP code
________
.. code-block:: php

   <?php
   
   class X {
       function X() {
           echo __METHOD__;
       }
   }
   
   var_dump(new X());
   
   ?>

Before
______
.. code-block:: output

   PHP Deprecated:  Methods with the same name as their class will not be constructors in a future version of PHP; X has a deprecated constructor
   
   Deprecated: Methods with the same name as their class will not be constructors in a future version of PHP; X has a deprecated constructor
   X::Xobject(X)#1 (0) {
   }
   

After
______
.. code-block:: output

   object(X)#1 (0) {
   }
   


PHP version change
__________________
This behavior was deprecated in 7.0

This behavior changed in 8.0


Error Messages
______________

  + `Deprecated: Methods with the same name as their class will not be constructors in a future version of PHP; x has a deprecated constructor <https://php-errors.readthedocs.io/en/latest/messages/methods-with-the-same-name-as-their-class-will-not-be-constructors-in-a-future-version-of-php%3B-%25s-has-a-deprecated-constructor.html>`_


Analyzer
_________

  + `Classes/OldStyleConstructor <https://exakat.readthedocs.io/en/latest/Reference/Rules/Classes/OldStyleConstructor.html>`_



