.. _`typed-class-constant`:

Typed Class Constant
====================
.. meta::
	:description:
		Typed Class Constant: Support for typed class constants was added in PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Typed Class Constant
	:twitter:description: Typed Class Constant: Support for typed class constants was added in PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Typed Class Constant
	:og:type: article
	:og:description: Support for typed class constants was added in PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/typedClassConstant.html
	:og:locale: en

Support for typed class constants was added in PHP 8.3

PHP code
________
.. code-block:: php

   <?php
   
   class x {
       public int A = 1;
   }
   
   echo X::A;
   
   ?>

Before
______
.. code-block:: output

   Parse error: syntax error, unexpected identifier "A", expecting variable

After
______
.. code-block:: output

   1


PHP version change
__________________
This behavior changed in 8.3


See Also
________

* `Class Constants <https://www.php.net/manual/en/language.oop5.constants.php>`_


Error Messages
______________

  + `0 <https://php-errors.readthedocs.io/en/latest/messages/.html>`_


Analyzer
_________

  + `Classes/TypedClassConstants <https://exakat.readthedocs.io/en/latest/Reference/Rules/Classes/TypedClassConstants.html>`_



