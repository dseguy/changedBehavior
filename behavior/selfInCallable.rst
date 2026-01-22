.. _self-cannot-be-used-anymore-in-callable-arrays:

self Cannot Be Used Anymore In Callable Arrays
==============================================
.. meta::
	:description:
		self Cannot Be Used Anymore In Callable Arrays: PHP supports a callable syntax, based on array: it must be an array of two elements, where the index 0 is the object or the class, and the index 1 is the method name.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: self Cannot Be Used Anymore In Callable Arrays
	:twitter:description: self Cannot Be Used Anymore In Callable Arrays: PHP supports a callable syntax, based on array: it must be an array of two elements, where the index 0 is the object or the class, and the index 1 is the method name
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: self Cannot Be Used Anymore In Callable Arrays
	:og:type: article
	:og:description: PHP supports a callable syntax, based on array: it must be an array of two elements, where the index 0 is the object or the class, and the index 1 is the method name
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/selfInCallable.html
	:og:locale: en

PHP supports a callable syntax, based on array: it must be an array of two elements, where the index 0 is the object or the class, and the index 1 is the method name.



Until PHP 8.2, it was possible to use the keyword ``self``, to make the callable dependent on the context of usage of the callable. 



In the example, self would be calling the static method ``replace``, in A. 



Since PHP 8.2, this is a deprecated feature, and it will be removed in PHP 9.

PHP code
________
.. code-block:: php

   <?php
   
   class B
   {
       public static function work($it) {
   		return preg_replace_callback('~\w+~', array('self', 'self::replace'), $it);
       }
   
       public static function replace($a) {
       	return 'a';
       }
   }
   
   echo b::work('abc');
   
   ?>

Before
______
.. code-block:: output

   a

After
______
.. code-block:: output

   PHP Deprecated:  Use of self in callables is deprecated 
   
   Deprecated: Use of self in callables is deprecated 
   PHP Deprecated:  Callables of the form [B, self::replace] are deprecated 
   
   Deprecated: Callables of the form [B, self::replace] are deprecated 
   a


PHP version change
__________________
This behavior was deprecated in 8.2

This behavior changed in 9.0


Error Messages
______________

  + `Use of "self" in callables is deprecated <https://php-errors.readthedocs.io/en/latest/messages/use-of-%22self%22-in-callables-is-deprecated.html>`_


Analyzer
_________

  + `Functions/DeprecatedCallable <https://exakat.readthedocs.io/en/latest/Reference/Rules/Functions/DeprecatedCallable.html>`_



