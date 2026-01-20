.. _`cannot-bind-$this-to-static-closure`:

Cannot Bind $this To Static Closure
===================================
.. meta::
	:description:
		Cannot Bind $this To Static Closure: A static closure does not import any variables from the defining context.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot Bind $this To Static Closure
	:twitter:description: Cannot Bind $this To Static Closure: A static closure does not import any variables from the defining context
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Cannot Bind $this To Static Closure
	:og:type: article
	:og:description: A static closure does not import any variables from the defining context
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/staticClosureBinding.html
	:og:locale: en

A static closure does not import any variables from the defining context. In particular, it doesn't import the pseudo-variable ``$this``. This also applies when trying to reconfigure a closure with its ``bindTo()`` method.

PHP code
________
.. code-block:: php

   <?php
   
   class A {}
   
   $fn = static function () {  };
   
   $d = $fn->bindTo(new A, 'A');
   
   ?>

Before
______
.. code-block:: output

   PHP Warning:  Cannot bind an instance to a static closure
   
   Warning: Cannot bind an instance to a static closure
   

After
______
.. code-block:: output

   PHP Warning:  Cannot bind an instance to a static closure, this will be an error in PHP 9
   
   Warning: Cannot bind an instance to a static closure, this will be an error in PHP 9
   


PHP version change
__________________
This behavior changed in 8.5


Error Messages
______________

  + `Cannot bind an instance to a static closure <https://php-errors.readthedocs.io/en/latest/messages/cannot-bind-an-instance-to-a-static-closure.html>`_



