.. _`backed-enum-values-needed-to-compile`:

Backed Enum Values Needed To Compile
====================================
.. meta::
	:description:
		Backed Enum Values Needed To Compile: In PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Backed Enum Values Needed To Compile
	:twitter:description: Backed Enum Values Needed To Compile: In PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Backed Enum Values Needed To Compile
	:og:type: article
	:og:description: In PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/backed_enum_constant_check.html
	:og:locale: en

In PHP 8.1, the backed enums needed to be a completely processable at compile time. In particular, using other constants, global or class, was not possible. 



In PHP 8.2 and later, this problem has be postponed to execution time. This means that, when the constant values in the expression are available at usage time, then it is OK. 



Note that all the case expressions are checked at once, whatever the case, or constant used. If any constant expression is missing, even if it is not used, then PHP yields a fatal error. Autoload may play its part.



PHP code
________
.. code-block:: php

   <?php
   
   const D = 1;
   
   enum Foo: string {
       case A = '/' . D;
       case B = '/' . B;
       const C = 1;
   }
   
   Foo::A; // first actual usage of the case
   
   ?>

Before
______
.. code-block:: output

   PHP Fatal error:  Enum case value must be compile-time evaluatable in /codes/backed_enum_constant_check.php on line 4
   
   Fatal error: Enum case value must be compile-time evaluatable in /codes/backed_enum_constant_check.php on line 4

After
______
.. code-block:: output

   PHP Fatal error:  Uncaught Error: Undefined constant B in /codes/backed_enum_constant_check.php:7
   Stack trace:
   #0 /codes/backed_enum_constant_check.php(11): [constant expression]()
   #1 {main}
     thrown in /codes/backed_enum_constant_check.php on line 7
   
   Fatal error: Uncaught Error: Undefined constant B in /codes/backed_enum_constant_check.php:7
   Stack trace:
   #0 /codes/backed_enum_constant_check.php(11): [constant expression]()
   #1 {main}
     thrown in /codes/backed_enum_constant_check.php on line 7
   


PHP version change
__________________
This behavior changed in 8.3


Error Messages
______________

  + `Enum case value must be compile-time evaluatable <https://php-errors.readthedocs.io/en/latest/messages/enum-case-value-must-be-compile-time-evaluatable.html>`_



