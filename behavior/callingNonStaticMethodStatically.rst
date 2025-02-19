.. _`calling-non-static-method-statically`:

Calling Non-Static Method Statically
====================================
.. meta::
	:description:
		Calling Non-Static Method Statically: Calling non-static method statically has been deprecated for a long time.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Calling Non-Static Method Statically
	:twitter:description: Calling Non-Static Method Statically: Calling non-static method statically has been deprecated for a long time
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Calling Non-Static Method Statically
	:og:type: article
	:og:description: Calling non-static method statically has been deprecated for a long time
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/callingNonStaticMethodStatically.html
	:og:locale: en

Calling non-static method statically has been deprecated for a long time. 



It should be noted that, inside a class, it is possible to statically call any methods of the same class. This is needed for edge cases such as ``parent::__construct()``, where the constructor is never static.



PHP code
________
.. code-block:: php

   <?php
   
   class x {
   	function foo() {
   		print __METHOD__;
   	}
   }
   
   x::foo();
   
   ?>

Before
______
.. code-block:: output

   PHP Deprecated:  Non-static method x::foo() should not be called statically in /codes/callingNonStaticMethodStatically.php on line 9
   
   Deprecated: Non-static method x::foo() should not be called statically in /codes/callingNonStaticMethodStatically.php on line 9
   x::foo

After
______
.. code-block:: output

   PHP Fatal error:  Uncaught Error: Non-static method x::foo() cannot be called statically in /codes/callingNonStaticMethodStatically.php:9
   Stack trace:
   #0 {main}
     thrown in /codes/callingNonStaticMethodStatically.php on line 9
   
   Fatal error: Uncaught Error: Non-static method x::foo() cannot be called statically in /codes/callingNonStaticMethodStatically.php:9
   Stack trace:
   #0 {main}
     thrown in /codes/callingNonStaticMethodStatically.php on line 9
   


PHP version change
__________________
This behavior changed in 8.0


Error Messages
______________

  + `Non-static method %s::%s() should not be called statically <https://php-errors.readthedocs.io/en/latest/messages/non-static-method-%25s%3A%3A%25s%28%29-should-not-be-called-statically.html>`_



