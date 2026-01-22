.. _array_product()-new-checks:

array_product() New Checks
==========================
.. meta::
	:description:
		array_product() New Checks: array_product() used to cast the arguments to integers before executing the multiplications.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: array_product() New Checks
	:twitter:description: array_product() New Checks: array_product() used to cast the arguments to integers before executing the multiplications
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: array_product() New Checks
	:og:type: article
	:og:description: array_product() used to cast the arguments to integers before executing the multiplications
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/arrayProdChecks.html
	:og:locale: en

array_product() used to cast the arguments to integers before executing the multiplications. Nowadays, the strange types raise a warning, as illustrated here with the array. 

PHP code
________
.. code-block:: php

   <?php
   
   print array_product([1, true, []]);
   
   ?>

Before
______
.. code-block:: output

   1

After
______
.. code-block:: output

   PHP Warning:  array_product(): Multiplication is not supported on type array
   
   Warning: array_product(): Multiplication is not supported on type array
   1


PHP version change
__________________
This behavior changed in 8.3


Error Messages
______________

  + `array_product(): Multiplication is not supported on type array <https://php-errors.readthedocs.io/en/latest/messages/array_product%28%29%3A-multiplication-is-not-supported-on-type-array.html>`_



