.. _\__debuginfo()-nullable-return-type-is-deprecated:

__debugInfo() Nullable Return Type Is Deprecated
================================================
.. meta::
	:description:
		__debugInfo() Nullable Return Type Is Deprecated: The magic method ``__debugInfo()`` used to be freely typed to return ``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: __debugInfo() Nullable Return Type Is Deprecated
	:twitter:description: __debugInfo() Nullable Return Type Is Deprecated: The magic method ``__debugInfo()`` used to be freely typed to return ``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: __debugInfo() Nullable Return Type Is Deprecated
	:og:type: article
	:og:description: The magic method ``__debugInfo()`` used to be freely typed to return ``
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/debugInfoNullableDeprecated.html
	:og:locale: en

The magic method ``__debugInfo()`` used to be freely typed to return ``?array``, since ``null`` and ``array`` were both acceptable return values. In PHP 8.6, simply declaring ``__debugInfo()`` with a nullable ``?array`` return type is deprecated, regardless of what is actually returned: the return type should be made non-nullable, and an empty array should be returned instead of ``null``.

PHP code
________
.. code-block:: php

   <?php
   
   class x {
       public function __debugInfo(): ?array {
           return ['a' => 1];
       }
   }
   
   var_dump(new x());
   
   ?>

Before
______
.. code-block:: output

   object(x)#1 (1) {
     [a]=>
     int(1)
   }
   

After
______
.. code-block:: output

   PHP Deprecated:  Returning null from x::__debugInfo() is deprecated, make the return type non-nullable and return an empty array instead
   
   Deprecated: Returning null from x::__debugInfo() is deprecated, make the return type non-nullable and return an empty array instead
   object(x)#1 (1) {
     [a]=>
     int(1)
   }
   


PHP version change
__________________
This behavior was deprecated in 8.6

This behavior changed in 


See Also
________

* `PHP 8.6 NEWS <https://www.php.net/ChangeLog-8.php#8.6.0>`_


Error Messages
______________

  + `Returning null from %s::__debugInfo() is deprecated, return an empty array instead <https://php-errors.readthedocs.io/en/latest/messages/returning-null-from-%25s%3A%3A__debuginfo%28%29-is-deprecated%2C-return-an-empty-array-instead.html>`_



