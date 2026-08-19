.. _first-class-callables-inside-constant-expressions-must-resolve-to-a-literal-method-name:

First-Class Callables Inside Constant Expressions Must Resolve To A Literal Method Name
=======================================================================================
.. meta::
	:description:
		First-Class Callables Inside Constant Expressions Must Resolve To A Literal Method Name: PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: First-Class Callables Inside Constant Expressions Must Resolve To A Literal Method Name
	:twitter:description: First-Class Callables Inside Constant Expressions Must Resolve To A Literal Method Name: PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: First-Class Callables Inside Constant Expressions Must Resolve To A Literal Method Name
	:og:type: article
	:og:description: PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/constantExpressionMethodNameResolution85.html
	:og:locale: en

PHP 8.5 allows first-class callable syntax (``(...)``) to be used inside a constant expression -- a global constant, a class constant, a static property default, a parameter default value, and so on -- so that a static method can be turned into a ``Closure`` at compile time. To build that closure, the method name must be resolvable at compile time, which introduces two new, related compile errors for static method calls (``X::method(...)``):



'Cannot use dynamic method name in constant expression' is reported when the braced method-name expression cannot be folded down to a constant value at all -- for example because it is an array, or depends on something not known at compile time.



'Illegal method name' is reported when the braced expression does resolve to a compile-time constant, but that value is not a legal method name, such as an integer.



The equivalent restrictions for a plain function name (rather than a static method) are reported as 'Cannot use dynamic function name in constant expression' and 'Illegal function name'.

PHP code
________
.. code-block:: php

   <?php
   
   class X {
       public static function foo() { return 1; }
   }
   
   const C1 = X::{[1, 2]}(...); // Cannot use dynamic method name in constant expression
   
   const C2 = X::{0}(...); // Illegal method name
   
   ?>

Before
______
.. code-block:: output

   

After
______
.. code-block:: output

   PHP Fatal error:  Cannot use dynamic method name in constant expression
   


PHP version change
__________________
This behavior changed in 8.5


Error Messages
______________

  + `Cannot use dynamic method name in constant expression <https://php-errors.readthedocs.io/en/latest/messages/cannot-use-dynamic-method-name-in-constant-expression.html>`_
  + `Illegal method name <https://php-errors.readthedocs.io/en/latest/messages/illegal-method-name.html>`_



