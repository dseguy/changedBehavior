.. _`null-used-as-array`:

Null Used As Array
==================
.. meta::
	:description:
		Null Used As Array: Null is not an array, but it is possible to use the array syntax with it.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Null Used As Array
	:twitter:description: Null Used As Array: Null is not an array, but it is possible to use the array syntax with it
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Null Used As Array
	:og:type: article
	:og:description: Null is not an array, but it is possible to use the array syntax with it
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/NullAsArray.html
	:og:locale: en

Null is not an array, but it is possible to use the array syntax with it. The values are then always ``null``, and since PHP 7.4, a warning is emitted.

PHP code
________
.. code-block:: php

   <?php
   
   var_dump(null[0]);
   
   var_dump(null['dsds']);
   
   
   ?>

Before
______
.. code-block:: output

   NULL

After
______
.. code-block:: output

   PHP Warning:  Trying to access array offset on null in /codes/nullAsArray.php on line 3
   
   Warning: Trying to access array offset on null in /codes/nullAsArray.php on line 3
   NULL


PHP version change
__________________
This behavior changed in 7.4


Error Messages
______________

  + `Trying to access array offset on %s <https://php-errors.readthedocs.io/en/latest/messages/trying-to-access-array-offset-on-%25s.html>`_



