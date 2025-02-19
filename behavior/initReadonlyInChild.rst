.. _`init-readonly-properties-in-child`:

Init Readonly Properties In Child
=================================
.. meta::
	:description:
		Init Readonly Properties In Child: Readonly properties used to be only assigned a value in their definition class.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Init Readonly Properties In Child
	:twitter:description: Init Readonly Properties In Child: Readonly properties used to be only assigned a value in their definition class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Init Readonly Properties In Child
	:og:type: article
	:og:description: Readonly properties used to be only assigned a value in their definition class
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/initReadonlyInChild.html
	:og:locale: en

Readonly properties used to be only assigned a value in their definition class. Even when they were protected, they could not be set in a child context. 



In PHP 8.4, it is now possible. 



On the other hand, initialisation in the global space is still forbidden.

PHP code
________
.. code-block:: php

   <?php
   
   class x {
   	protected readonly int $property;
   }
   
   class y extends x {
       function __construct() {
           $this->property = 5;
       }
   }
   
   $x = new y;
   echo $x->property;
   
   ?>

Before
______
.. code-block:: output

   PHP Fatal error:  Uncaught Error: Cannot initialize readonly property x::$property from scope y in /codes/initReadonlyInChild.php:9

After
______
.. code-block:: output

   5


PHP version change
__________________
This behavior changed in 8.4


Error Messages
______________

  + `Cannot %s readonly property %s::$%s from %s%s <https://php-errors.readthedocs.io/en/latest/messages/cannot-%25s-readonly-property-%25s%3A%3A%24%25s-from-%25s%25s.html>`_



