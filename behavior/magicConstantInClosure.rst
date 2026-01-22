.. _\__function__-in-closure-changed:

__FUNCTION__ In Closure Changed
===============================
.. meta::
	:description:
		__FUNCTION__ In Closure Changed: When using the magic constant ``__FUNCTION__`` inside a closure, the content used to be the ``{closure}`` string only.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: __FUNCTION__ In Closure Changed
	:twitter:description: __FUNCTION__ In Closure Changed: When using the magic constant ``__FUNCTION__`` inside a closure, the content used to be the ``{closure}`` string only
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: __FUNCTION__ In Closure Changed
	:og:type: article
	:og:description: When using the magic constant ``__FUNCTION__`` inside a closure, the content used to be the ``{closure}`` string only
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/magicConstantInClosure.html
	:og:locale: en

When using the magic constant ``__FUNCTION__`` inside a closure, the content used to be the ``{closure}`` string only. Since PHP 8.4, it also includes the name of the original file, and the line number, so as to identify the origin source code.

PHP code
________
.. code-block:: php

   <?php
   
   $foo = fn() => __FUNCTION__;
   
   $closure = function() { return __FUNCTION__;};
   
   echo $foo();
   
   echo $closure();
   
   
   ?>

Before
______
.. code-block:: output

   {closure}{closure}

After
______
.. code-block:: output

   {closure:/codes/magicConstantInClosure.php:3}{closure:/codes/magicConstantInClosure.php:5}


PHP version change
__________________
This behavior changed in 8.4



