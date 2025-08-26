.. _`cannot-explode()-null`:

Cannot Explode() Null
=====================
.. meta::
	:description:
		Cannot Explode() Null: Null used to be a valid argument for explode(), used as an empty string.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot Explode() Null
	:twitter:description: Cannot Explode() Null: Null used to be a valid argument for explode(), used as an empty string
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Cannot Explode() Null
	:og:type: article
	:og:description: Null used to be a valid argument for explode(), used as an empty string
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/explodeWithNull.html
	:og:locale: en

Null used to be a valid argument for explode(), used as an empty string. Nowadays, PHP requires an actual string to explode.

PHP code
________
.. code-block:: php

   <?php
   
   var_dump(explode(';', null));
   
   ?>

Before
______
.. code-block:: output

   array(1) {
     [0]=>
     string(0) "" 
   }
   

After
______
.. code-block:: output

   PHP Deprecated:  explode(): Passing null to parameter #2 ($string) of type string is deprecated in /codes/explodeWithNull.php on line 3
   
   Deprecated: explode(): Passing null to parameter #2 ($string) of type string is deprecated in /codes/explodeWithNull.php on line 3
   array(1) {
     [0]=>
     string(0) "" 
   }
   


PHP version change
__________________
This behavior changed in 8.1


Error Messages
______________

  + `0 <https://php-errors.readthedocs.io/en/latest/messages/.html>`_



