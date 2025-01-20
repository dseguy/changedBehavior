.. _`float-used-as-array`:

Float Used As Array
===================
.. meta::
	:description:
		Float Used As Array: Integer is not an array, but it is possible to use the array syntax with it.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Float Used As Array
	:twitter:description: Float Used As Array: Integer is not an array, but it is possible to use the array syntax with it
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Float Used As Array
	:og:type: article
	:og:description: Integer is not an array, but it is possible to use the array syntax with it
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/FloatAsArray.html
	:og:locale: en

Integer is not an array, but it is possible to use the array syntax with it. The values are then always ``null``, and since PHP 7.4, a warning is emitted.

PHP code
________
.. code-block:: php

   <?php
   
   var_dump(456[0]);
   
   $a = 456;
   var_dump($a['dsds']);
   
   
   ?>

Before
______
.. code-block:: output

   NULL

After
______
.. code-block:: output

   PHP Warning:  Trying to access array offset on integer
   
   Warning: Trying to access array offset on integer
   NULL


PHP version change
__________________
This behavior changed in 7.4


Error Messages
______________

  + `Trying to access array offset on %s <https://php-errors.readthedocs.io/en/latest/messages/trying-to-access-array-offset-on-%25s.html>`_



