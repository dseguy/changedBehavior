.. _`method-export()-in-reflection-is-removed`:

Method export() in Reflection Is removed
========================================
.. meta::
	:description:
		Method export() in Reflection Is removed: The ``Reflection::export()`` static method was deprecated in PHP 7.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Method export() in Reflection Is removed
	:twitter:description: Method export() in Reflection Is removed: The ``Reflection::export()`` static method was deprecated in PHP 7
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Method export() in Reflection Is removed
	:og:type: article
	:og:description: The ``Reflection::export()`` static method was deprecated in PHP 7
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/exportReflection.html
	:og:locale: en

The ``Reflection::export()`` static method was deprecated in PHP 7.4 and removed in 8.0.

PHP code
________
.. code-block:: php

   <?php
   
   class A {}
   
   $reflector = new ReflectionClass('A');
   
   print Reflection::export($reflector, true);

Before
______
.. code-block:: output

   PHP Deprecated:  Function Reflection::export() is deprecated in /codes/exportReflection.php on line 7
   
   Deprecated: Function Reflection::export() is deprecated in /codes/exportReflection.php on line 7
   Class [ <user> class A ] {
     @@ /codes/exportReflection.php 3-3
   
     - Constants [0] {
     }
   
     - Static properties [0] {
     }
   
     - Static methods [0] {
     }
   
     - Properties [0] {
     }
   
     - Methods [0] {
     }
   }
   

After
______
.. code-block:: output

   PHP Fatal error:  Uncaught Error: Call to undefined method Reflection::export() in /codes/exportReflection.php:7
   Stack trace:
   #0 {main}
     thrown in /codes/exportReflection.php on line 7
   
   Fatal error: Uncaught Error: Call to undefined method Reflection::export() in /codes/exportReflection.php:7
   Stack trace:
   #0 {main}
     thrown in /codes/exportReflection.php on line 7
   


PHP version change
__________________
This behavior changed in 8.0


Error Messages
______________

  + `0 <https://php-errors.readthedocs.io/en/latest/messages/.html>`_



