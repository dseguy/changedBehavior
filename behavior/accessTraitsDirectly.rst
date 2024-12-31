.. _`accessing-trait-resources-directly-is-not-allowed`:

Accessing Trait Resources Directly Is Not Allowed
=================================================
.. meta::
	:description:
		Accessing Trait Resources Directly Is Not Allowed: It is not possible anymore to use traits just like a standalone class.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Accessing Trait Resources Directly Is Not Allowed
	:twitter:description: Accessing Trait Resources Directly Is Not Allowed: It is not possible anymore to use traits just like a standalone class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Accessing Trait Resources Directly Is Not Allowed
	:og:type: article
	:og:description: It is not possible anymore to use traits just like a standalone class
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/accessTraitsDirectly.html
	:og:locale: en

It is not possible anymore to use traits just like a standalone class. As such, accessing methods, properties (and later constants) directly on the trait is not allowed anymore in PHP 8.1 and later. The feature might be removed in PHP 9.0.

Only static resources were accessible via the trait, as it is not possible to instantiate a trait without a class. 

PHP code
________
.. code-block:: php

   <?php
   
   trait t {
           static function foo() { print __METHOD__;}
           static $x = 'A';
   }
   
   echo T::foo();
   echo T::$x;
   
   ?>

Before
______
.. code-block:: output

   t::fooA

After
______
.. code-block:: output

   PHP Deprecated:  Calling static trait method t::foo is deprecated, it should only be called on a class using the trait in /codes/accessTraitsDirectly.php on line 8
   
   Deprecated: Calling static trait method t::foo is deprecated, it should only be called on a class using the trait in /codes/accessTraitsDirectly.php on line 8
   t::fooPHP Deprecated:  Accessing static trait property t::$x is deprecated, it should only be accessed on a class using the trait in /codes/accessTraitsDirectly.php on line 9
   
   Deprecated: Accessing static trait property t::$x is deprecated, it should only be accessed on a class using the trait in /codes/accessTraitsDirectly.php on line 9
   A


PHP version change
__________________
This behavior was deprecated in 8.1

This behavior changed in 9.0


Error Messages
______________

  + `Calling static trait method t::foo is deprecated, it should only be called on a class using the trait <https://php-errors.readthedocs.io/en/latest/messages/calling-static-trait-method-%25s%5C%3A%5C%3A%25s-is-deprecated.html>`_



