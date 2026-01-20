.. _`destructuring-non-arrays`:

Destructuring Non Arrays
========================
.. meta::
	:description:
		Destructuring Non Arrays: Destructuring non array values emits a warning in PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Destructuring Non Arrays
	:twitter:description: Destructuring Non Arrays: Destructuring non array values emits a warning in PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Destructuring Non Arrays
	:og:type: article
	:og:description: Destructuring non array values emits a warning in PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/destructuringNonArray.html
	:og:locale: en

Destructuring non array values emits a warning in PHP 8.5. This applies to integers, floats, strings and booleans. objects emits a Fatal Error, as before. ``null`` values are not emitting any warning.

PHP code
________
.. code-block:: php

   <?php
   
   [$a, $b] = 'abc';
   [$a, $b] = 123;
   [$a, $b] = true;
   [$a, $b] = (object) [1,2];
   
   [$a, $b] = null;  // OK
   
   var_dump($a);
   
   ?>

Before
______
.. code-block:: output

   PHP Fatal error:  Uncaught Error: Cannot use object of type stdClass as array 
   
   Fatal error: Uncaught Error: Cannot use object of type stdClass as array 
   
   

After
______
.. code-block:: output

   PHP Warning:  Cannot use string as array 
   
   Warning: Cannot use string as array 
   PHP Warning:  Cannot use string as array 
   
   Warning: Cannot use string as array 
   PHP Warning:  Cannot use int as array 
   
   Warning: Cannot use int as array 
   PHP Warning:  Cannot use int as array 
   
   Warning: Cannot use int as array 
   PHP Warning:  Cannot use bool as array 
   
   Warning: Cannot use bool as array 
   PHP Warning:  Cannot use bool as array 
   
   Warning: Cannot use bool as array 
   PHP Fatal error:  Uncaught Error: Cannot use object of type stdClass as array 
   
   Fatal error: Uncaught Error: Cannot use object of type stdClass as array 
   


PHP version change
__________________
This behavior changed in 8.5


Error Messages
______________

  + `Cannot use %s as array <https://php-errors.readthedocs.io/en/latest/messages/cannot-use-%25s-as-array.html>`_



