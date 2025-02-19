.. _`relative-callable-in-strings`:

Relative Callable In Strings
============================
.. meta::
	:description:
		Relative Callable In Strings: PHP has a syntax to designate a method, with its class and method name.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Relative Callable In Strings
	:twitter:description: Relative Callable In Strings: PHP has a syntax to designate a method, with its class and method name
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Relative Callable In Strings
	:og:type: article
	:og:description: PHP has a syntax to designate a method, with its class and method name
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/relativeCallable.html
	:og:locale: en

PHP has a syntax to designate a method, with its class and method name. That syntax used to support relative class names, such as self, parent and static. That allowed the definition of callable that would be relative to their point of execution, and not their point of definition. This is a gone feature in PHP 8.2.

PHP code
________
.. code-block:: php

   <?php
   
   class x {
       function a() {
           print __METHOD__;
       }
       
       function b() {
           call_user_func('self::a');
       }
   }
   
   (new x)->b();
   
   ?>

Before
______
.. code-block:: output

   x::a

After
______
.. code-block:: output

   PHP Deprecated:  Use of "self" in callables is deprecated in /codes/relativeCallable.php on line 9
   
   Deprecated: Use of "self" in callables is deprecated in /codes/relativeCallable.php on line 9
   x::a


PHP version change
__________________
This behavior was deprecated in 8.2

This behavior changed in 9.0


See Also
________

* `PHP RFC: Expand deprecation notice scope for partially supported callables <\https://wiki.php.net/rfc/partially-supported-callables-expand-deprecation-notices>`_
* `Callable <https://www.php.net/manual/en/language.types.callable.php>`_


