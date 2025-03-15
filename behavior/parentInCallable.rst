.. _`parent-cannot-be-used-anymore-in-callable-arrays`:

parent Cannot Be Used Anymore In Callable Arrays
================================================
.. meta::
	:description:
		parent Cannot Be Used Anymore In Callable Arrays: PHP supports a callable syntax, based on array: it must be an array of two elements, where the index 0 is the object or the class, and the index 1 is the method name.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: parent Cannot Be Used Anymore In Callable Arrays
	:twitter:description: parent Cannot Be Used Anymore In Callable Arrays: PHP supports a callable syntax, based on array: it must be an array of two elements, where the index 0 is the object or the class, and the index 1 is the method name
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: parent Cannot Be Used Anymore In Callable Arrays
	:og:type: article
	:og:description: PHP supports a callable syntax, based on array: it must be an array of two elements, where the index 0 is the object or the class, and the index 1 is the method name
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/parentInCallable.html
	:og:locale: en

PHP supports a callable syntax, based on array: it must be an array of two elements, where the index 0 is the object or the class, and the index 1 is the method name.



Until PHP 8.2, it was possible to use the keyword ``parent``, to make the callable work with the parent class. 



In the example, parent would be calling the static method ``replace``, in A, or any other parent. 



Since PHP 8.2, this is a deprecated feature, and it will be removed in PHP 9.



PHP code
________
.. code-block:: php

   <?php
   
   class A {
       public static function replace($a) {
       	return 'a';
       }
   }
   
   class B extends A
   {
       public static function work($it) {
   		return preg_replace_callback('~\w+~', array('parent', 'parent::replace'), $it);
       }
   }
   
   echo b::work('abc');

Before
______
.. code-block:: output

   PHP Fatal error:  Uncaught TypeError: preg_replace_callback(): Argument #2 ($callback) must be a valid callback, cannot access parent when current class scope has no parent in /codes/parentInCallable.php:12
   Stack trace:
   #0 /codes/parentInCallable.php(12): preg_replace_callback('~\w+~', Array, 'abc')
   #1 /codes/parentInCallable.php(16): B::work('abc')
   #2 {main}
     thrown in /codes/parentInCallable.php on line 12
   
   Fatal error: Uncaught TypeError: preg_replace_callback(): Argument #2 ($callback) must be a valid callback, cannot access parent when current class scope has no parent in /codes/parentInCallable.php:12
   Stack trace:
   #0 /codes/parentInCallable.php(12): preg_replace_callback('~\w+~', Array, 'abc')
   #1 /codes/parentInCallable.php(16): B::work('abc')
   #2 {main}
     thrown in /codes/parentInCallable.php on line 12
   

After
______
.. code-block:: output

   PHP Deprecated:  Use of parent in callables is deprecated in /codes/parentInCallable.php on line 12
   
   Deprecated: Use of parent in callables is deprecated in /codes/parentInCallable.php on line 12
   PHP Fatal error:  Uncaught TypeError: preg_replace_callback(): Argument #2 ($callback) must be a valid callback, cannot access parent when current class scope has no parent in /codes/parentInCallable.php:12
   Stack trace:
   #0 /codes/parentInCallable.php(12): preg_replace_callback('~\w+~', Array, 'abc')
   #1 /codes/parentInCallable.php(16): B::work('abc')
   #2 {main}
     thrown in /codes/parentInCallable.php on line 12
   
   Fatal error: Uncaught TypeError: preg_replace_callback(): Argument #2 ($callback) must be a valid callback, cannot access parent when current class scope has no parent in /codes/parentInCallable.php:12
   Stack trace:
   #0 /codes/parentInCallable.php(12): preg_replace_callback('~\w+~', Array, 'abc')
   #1 /codes/parentInCallable.php(16): B::work('abc')
   #2 {main}
     thrown in /codes/parentInCallable.php on line 12
   


PHP version change
__________________
This behavior was deprecated in 8.2

This behavior changed in 9.0


Error Messages
______________

  + `Use of "parent" in callables is deprecated <https://php-errors.readthedocs.io/en/latest/messages/use-of-%22parent%22-in-callables-is-deprecated.html>`_



