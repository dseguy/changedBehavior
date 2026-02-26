.. _reflection-doesn't-return-self:

Reflection Doesn't Return Self
==============================
.. meta::
	:description:
		Reflection Doesn't Return Self: Reflection used to return the original ``self`` type, including its case.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Reflection Doesn't Return Self
	:twitter:description: Reflection Doesn't Return Self: Reflection used to return the original ``self`` type, including its case
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Reflection Doesn't Return Self
	:og:type: article
	:og:description: Reflection used to return the original ``self`` type, including its case
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/reflection_self.html
	:og:locale: en

Reflection used to return the original ``self`` type, including its case. Since PHP 8.5, it is now returning the actual name of the class, instead of the relative type.

PHP code
________
.. code-block:: php

   <?php
   
   // code from https://www.reddit.com/r/PHP/comments/1rd3j74/php_85_reflectionnamedtypegetname_change/
   class Foo
   {
       function poop (self $a): self
       {
       }
   }
   
   $refMethod = new ReflectionMethod('Foo', 'poop');
   $refParam = $refMethod->getParameters()[0];
   
   print_r(array(
       'paramType' => $refParam->getType()->getName(),
       'returnType' => $refMethod->getReturnType()->getName(),
   ));
   
   ?>

Before
______
.. code-block:: output

   Array
   (
       [paramType] => self
       [returnType] => self
   )
   

After
______
.. code-block:: output

   Array
   (
       [paramType] => Foo
       [returnType] => Foo
   )
   


PHP version change
__________________
This behavior changed in 8.5


See Also
________

* `PHP 8.5 ReflectionNamedType->getName() change? <https://www.reddit.com/r/PHP/comments/1rd3j74/php_85_reflectionnamedtypegetname_change/>`_



