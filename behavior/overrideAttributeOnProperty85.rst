.. _override-attribute-extended-to-properties:

Override Attribute Extended To Properties
=========================================
.. meta::
	:description:
		Override Attribute Extended To Properties: The ``#[\Override]`` attribute, introduced in PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Override Attribute Extended To Properties
	:twitter:description: Override Attribute Extended To Properties: The ``#[\Override]`` attribute, introduced in PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Override Attribute Extended To Properties
	:og:type: article
	:og:description: The ``#[\Override]`` attribute, introduced in PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/overrideAttributeOnProperty85.html
	:og:locale: en

The ``#[\Override]`` attribute, introduced in PHP 8.3, could originally only target methods. PHP 8.5 extends it so it can also be applied to properties, telling the engine that the property is expected to override a property of the same name declared in a parent class or an implemented interface, so the engine can check that this is really the case.



If the property marked ``#[\Override]`` has no matching parent property -- because the parent has no property of that name, because the class has no parent at all, or because the property comes from a trait whose using class has no matching parent property -- PHP reports a compile-time error.

PHP code
________
.. code-block:: php

   <?php
   
   class X {
       public int $a = 1;
   }
   
   class Y extends X {
       #[\Override]
       public int $b = 2;
   }
   
   ?>

Before
______
.. code-block:: output

   PHP Fatal error:  Attribute "Override" cannot target property (allowed targets: method)
   

After
______
.. code-block:: output

   PHP Fatal error:  Y::$b has #[\Override] attribute, but no matching parent property exists
   


PHP version change
__________________
This behavior changed in 8.5


Error Messages
______________

  + `%s::$%s has #[\Override] attribute <https://php-errors.readthedocs.io/en/latest/messages/%25s%3A%3A%24%25s-has-%23%5B--override%5D-attribute.html>`_



