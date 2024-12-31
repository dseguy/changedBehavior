.. _`non-static-method-called-statically`:

Non Static Method Called Statically
===================================
.. meta::
	:description:
		Non Static Method Called Statically: It is not possible to call a non-static method statically, and now, it is also not possible to call non-statically a static method.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Non Static Method Called Statically
	:twitter:description: Non Static Method Called Statically: It is not possible to call a non-static method statically, and now, it is also not possible to call non-statically a static method
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Non Static Method Called Statically
	:og:type: article
	:og:description: It is not possible to call a non-static method statically, and now, it is also not possible to call non-statically a static method
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/nonStaticMethodCalledStatically.html
	:og:locale: en

It is not possible to call a non-static method statically, and now, it is also not possible to call non-statically a static method. 



The static syntax is still valid with expression like ``parent::__construct``. Be aware that a call such as ``self::foo`` also checks if the target method is static.



PHP code
________
.. code-block:: php

   <?php
   
   class Foo {
       public function bar() {}
       
       static function foo() {
       	self::bar();
       }
   }
   //Non-static method Foo::bar() cannot be called statically (line 10)
   Foo::bar();
   
   //Non-static method Foo::bar() cannot be called statically (line 6)
   Foo::foo();
   
   ?>

Before
______
.. code-block:: output

   PHP Deprecated:  Non-static method Foo::bar() should not be called statically in /codes/nonStaticMethodCalledStatically.php on line 6
   
   Deprecated: Non-static method Foo::bar() should not be called statically in /codes/nonStaticMethodCalledStatically.php on line 6
   

After
______
.. code-block:: output

   PHP Fatal error:  Uncaught Error: Non-static method Foo::bar() cannot be called statically in /codes/nonStaticMethodCalledStatically.php:6
   Stack trace:
   #0 {main}
     thrown in /codes/nonStaticMethodCalledStatically.php on line 6
   
   Fatal error: Uncaught Error: Non-static method Foo::bar() cannot be called statically in /codes/nonStaticMethodCalledStatically.php:6
   Stack trace:
   #0 {main}
     thrown in /codes/nonStaticMethodCalledStatically.php on line 6
   


PHP version change
__________________
This behavior was deprecated in 7.0

This behavior changed in 8.0


Error Messages
______________

  + `Non-static method Foo::bar() cannot be called statically <https://php-errors.readthedocs.io/en/latest/messages/Non-static+method+Foo%3A%3Abar%28%29+cannot+be+called+statically.html>`_



