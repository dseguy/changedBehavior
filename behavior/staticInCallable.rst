.. _`static-cannot-be-used-anymore-in-callable-arrays`:

static Cannot Be Used Anymore In Callable Arrays
================================================
PHP supports a callable syntax, based on array: it must be an array of two elements, where the index 0 is the object or the class, and the index 1 is the method name.



Until PHP 8.2, it was possible to use the keyword ``static``, to make the callable dependent on the context of usage of the callable. 



In the example, static would be calling the static method ``replace``, in A, or in any other class where it is used. 



Since PHP 8.2, this is a deprecated feature, and it will be removed in PHP 9.



PHP code
________
.. code-block:: php

   <?php
   class A
   {
       public static function work($it) {
   		return preg_replace_callback('~\w+~', array('static', 'static::replace'), $it);
       }
       
       public static function replace($a) {
       	return 'a';
       }
   }
   
   echo a::work('abc');

Before
______
.. code-block:: output

   a

After
______
.. code-block:: output

   PHP Deprecated:  Use of static in callables is deprecated in /codes/staticInCallable.php on line 5
   
   Deprecated: Use of static in callables is deprecated in /codes/staticInCallable.php on line 5
   PHP Deprecated:  Callables of the form [A, static::replace] are deprecated in /codes/staticInCallable.php on line 5
   
   Deprecated: Callables of the form [A, static::replace] are deprecated in /codes/staticInCallable.php on line 5
   a


PHP version change
__________________
This behavior was deprecated in 8.2

This behavior changed in 9.0


