.. _`$this-must-be-the-local-object`:

$this Must Be The Local Object
==============================
.. meta::
	:description:
		$this Must Be The Local Object: ``$this`` used to be a variable like any other, except for being filled with the local object in a method.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: $this Must Be The Local Object
	:twitter:description: $this Must Be The Local Object: ``$this`` used to be a variable like any other, except for being filled with the local object in a method
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: $this Must Be The Local Object
	:og:type: article
	:og:description: ``$this`` used to be a variable like any other, except for being filled with the local object in a method
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/thisMustBeInObject.html
	:og:locale: en

``$this`` used to be a variable like any other, except for being filled with the local object in a method. 



Since PHP 7.1, it is now only used for this purpose. This means that ``$this`` cannot be used outside a class, an enumeration or a trait, and for any other purpose.

PHP code
________
.. code-block:: php

   <?php
   
   var_dump($this);
   
   ?>

Before
______
.. code-block:: output

   PHP Notice:  Undefined variable: this in /codes/thisMustBeInObject.php on line 3
   
   Notice: Undefined variable: this in /codes/thisMustBeInObject.php on line 3
   NULL
   

After
______
.. code-block:: output

   PHP Fatal error:  Uncaught Error: Using $this when not in object context in /codes/thisMustBeInObject.php:3
   Stack trace:
   #0 {main}
     thrown in /codes/thisMustBeInObject.php on line 3
   
   Fatal error: Uncaught Error: Using $this when not in object context in /codes/thisMustBeInObject.php:3
   Stack trace:
   #0 {main}
     thrown in /codes/thisMustBeInObject.php on line 3
   


PHP version change
__________________
This behavior changed in 7.1


Error Messages
______________

  + `Using $this when not in object context <https://php-errors.readthedocs.io/en/latest/messages/using-%24this-when-not-in-object-context.html>`_



