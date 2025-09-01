.. _`static-properties-with-references`:

Static Properties With References
=================================
.. meta::
	:description:
		Static Properties With References: Static properties are shared between inheriting classes.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Static Properties With References
	:twitter:description: Static Properties With References: Static properties are shared between inheriting classes
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Static Properties With References
	:og:type: article
	:og:description: Static properties are shared between inheriting classes
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/staticWithReference.html
	:og:locale: en

Static properties are shared between inheriting classes. However, due to an implementation artifact, it was possible to separate the static properties by assigning a reference. This loophole has been fixed in PHP 7.3.

PHP code
________
.. code-block:: php

   <?php
   
       class Test {
           public static $x = 0;
       }
       class Test2 extends Test { }
       
       Test2::$x = &$x;
       $x = 1;
       
       var_dump(Test::$x, Test2::$x);
       // Previously: int(0), int(1)
       // Now: int(1), int(1)
   
   ?>

Before
______
.. code-block:: output

   int(0)
   int(1)
   

After
______
.. code-block:: output

   int(1)
   int(1)
   


PHP version change
__________________
This behavior changed in 7.3



