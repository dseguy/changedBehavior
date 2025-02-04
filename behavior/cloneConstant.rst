.. _`clone-a-constant`:

Clone A Constant
================
.. meta::
	:description:
		Clone A Constant: Cloning a constant was useless until PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Clone A Constant
	:twitter:description: Clone A Constant: Cloning a constant was useless until PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Clone A Constant
	:og:type: article
	:og:description: Cloning a constant was useless until PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/cloneConstant.html
	:og:locale: en

Cloning a constant was useless until PHP 8.1: this is the version where global constants could be initialized with an object. 



The syntax has always been valid, but, at execution time, it would emit an error, as the constant could not be cloned.

PHP code
________
.. code-block:: php

   <?php
   
   class C {}
   
   const A = new C;
   
   var_dump(clone A);
   
   ?>

Before
______
.. code-block:: output

   PHP Fatal error:  Constant expression contains invalid operations in /codes/cloneConstant.php on line 5
   
   Fatal error: Constant expression contains invalid operations in /codes/cloneConstant.php on line 5
   

After
______
.. code-block:: output

   object(C)#2 (0) {
   }
   


PHP version change
__________________
This behavior changed in 8.1


Error Messages
______________

  + `Constant expression contains invalid operations <https://php-errors.readthedocs.io/en/latest/messages/constant-expression-contains-invalid-operations.html>`_
  + `__clone method called on non-object <https://php-errors.readthedocs.io/en/latest/messages/__clone-method-called-on-non-object.html>`_



