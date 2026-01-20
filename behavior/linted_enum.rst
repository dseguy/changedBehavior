.. _`duplicate-enum-cases-are-not-linted-anymore`:

Duplicate Enum Cases Are Not Linted Anymore
===========================================
.. meta::
	:description:
		Duplicate Enum Cases Are Not Linted Anymore: Two different cases in an enumeration cannot have duplicate values.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Duplicate Enum Cases Are Not Linted Anymore
	:twitter:description: Duplicate Enum Cases Are Not Linted Anymore: Two different cases in an enumeration cannot have duplicate values
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Duplicate Enum Cases Are Not Linted Anymore
	:og:type: article
	:og:description: Two different cases in an enumeration cannot have duplicate values
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/linted_enum.html
	:og:locale: en

Two different cases in an enumeration cannot have duplicate values. 



In PHP 8.1, it was a compilation error, and the code would not be executed. 



Since PHP 8.2, it is only checked at execution time, when the enumeration is first used. This means that it may be a hidden bug, until that code is actually used.

PHP code
________
.. code-block:: php

   <?php
   
   enum A : int{
       case A = 1;
       case B = 1;
   }
   
   function foo(?A $x = null) { 
       var_dump($x);
   }
   
   // A is not used, as it default to NULL
   foo();
   
   ?>

Before
______
.. code-block:: output

   Fatal error: Duplicate value in enum A for cases A and B
   

After
______
.. code-block:: output

   NULL


PHP version change
__________________
This behavior changed in 8.2


See Also
________

* `Enumeration <https://www.php.net/manual/en/language.types.enumerations.php>`_


Error Messages
______________

  + `Duplicate value in enum A for cases A and B <https://php-errors.readthedocs.io/en/latest/messages/duplicate-value-in-enum-%25s-for-cases-%25s-and-%25s.html>`_



