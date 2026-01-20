.. _`cast-in-const`:

Cast In Const
=============
.. meta::
	:description:
		Cast In Const: PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cast In Const
	:twitter:description: Cast In Const: PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Cast In Const
	:og:type: article
	:og:description: PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/castInConst.html
	:og:locale: en

PHP 8.5 accepts the cast operators in constant expressions. Until then, operators such as ``(int)``, ``(float)``, ``(string)``, ``(array)`` were not allowed.



While using a cast on a literal value is rather meaningless, static constant expressions may be build on top of other constants. 



Then, ``(object)`` is still not accepted, along with ``(void)``. 

PHP code
________
.. code-block:: php

   <?php
   
   const S = 123s;
   const C = (int) S;
   
   class X {
       const C = (int) S;
   }
   
   echo C;
   
   ?>

Before
______
.. code-block:: output

   PHP Fatal error:  Constant expression contains invalid operations
   
   Fatal error: Constant expression contains invalid operations
   

After
______
.. code-block:: output

   123


PHP version change
__________________
This behavior changed in 8.5


Error Messages
______________

  + `Constant expression contains invalid operations <https://php-errors.readthedocs.io/en/latest/messages/constant-expression-contains-invalid-operations.html>`_



