.. _storage-of-static-properties-trait:

Storage Of Static Properties Trait
==================================
.. meta::
	:description:
		Storage Of Static Properties Trait: Static properties defined in a trait used to be merged with any existing static property in a parent class.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Storage Of Static Properties Trait
	:twitter:description: Storage Of Static Properties Trait: Static properties defined in a trait used to be merged with any existing static property in a parent class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Storage Of Static Properties Trait
	:og:type: article
	:og:description: Static properties defined in a trait used to be merged with any existing static property in a parent class
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/staticTraitStorage.html
	:og:locale: en

Static properties defined in a trait used to be merged with any existing static property in a parent class. Since PHP 8.3, the static property is directly related to the importing class, and is made distinct from any pre-existing static class.

PHP code
________
.. code-block:: php

   <?php
   
   trait T {
       static $T = 1;
   }
   
   class X {
       static $T = 1;
   
       function goo() {
           echo self::$T;
       }
   
   }
   
   class Y extends X {
       use t;
       
       function foo() {
           self::$T = 2;
           echo self::$T;
           self::goo();
       }
       
   }
   
   (new y)->foo();
   
   ?>

Before
______
.. code-block:: output

   2

After
______
.. code-block:: output

   1


PHP version change
__________________
This behavior changed in 8.3



