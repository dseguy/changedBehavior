.. _override-attribute-extended-to-class-constants-and-enum-cases:

Override Attribute Extended To Class Constants And Enum Cases
=============================================================
.. meta::
	:description:
		Override Attribute Extended To Class Constants And Enum Cases: The ``#[\Override]`` attribute, introduced in PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Override Attribute Extended To Class Constants And Enum Cases
	:twitter:description: Override Attribute Extended To Class Constants And Enum Cases: The ``#[\Override]`` attribute, introduced in PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Override Attribute Extended To Class Constants And Enum Cases
	:og:type: article
	:og:description: The ``#[\Override]`` attribute, introduced in PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/overrideAttributeOnConstant86.html
	:og:locale: en

The ``#[\Override]`` attribute, introduced in PHP 8.3 for methods and extended to properties in PHP 8.5, is further extended in PHP 8.6 to class constants and enum cases (an enum case being internally a special kind of class constant). It tells the engine that the constant is expected to override a constant of the same name declared in a parent class or an implemented interface, so the engine can check that this is really the case.



If the constant marked ``#[\Override]`` has no matching parent constant -- because the parent/interface declares no constant of that name, or because the class has no parent and implements no interface at all -- PHP reports a compile-time error. Only public and protected constants of a parent class or implemented interface satisfy the attribute; private constants do not count.

PHP code
________
.. code-block:: php

   <?php
   
   interface Shape {
       const SIDES = 0;
   }
   
   class Square implements Shape {
       #[\Override]
       const SIDES = 4; // Fine, overrides Shape::SIDES
   
       #[\Override]
       const COLOR = 'blue'; // Fatal error, no matching parent constant
   }
   
   ?>

Before
______
.. code-block:: output

   PHP Fatal error:  Attribute "Override" cannot target class constant (allowed targets: method)
   
   Fatal error: Attribute "Override" cannot target class constant (allowed targets: method)
   

After
______
.. code-block:: output

   PHP Fatal error:  Square::COLOR has #[\Override] attribute, but no matching parent constant exists
   


PHP version change
__________________
This behavior changed in 8.6


Error Messages
______________

  + `%s::%s has #[\Override] attribute <https://php-errors.readthedocs.io/en/latest/messages/%25s%3A%3A%25s-has-%23%5B--override%5D-attribute.html>`_



