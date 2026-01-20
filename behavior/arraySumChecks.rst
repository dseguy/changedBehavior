.. _`array_sum()-checks-operands-thoroughly`:

array_sum() Checks Operands Thoroughly
======================================
.. meta::
	:description:
		array_sum() Checks Operands Thoroughly: array_sum() used to cast the arguments to integers before executing the additions.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: array_sum() Checks Operands Thoroughly
	:twitter:description: array_sum() Checks Operands Thoroughly: array_sum() used to cast the arguments to integers before executing the additions
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: array_sum() Checks Operands Thoroughly
	:og:type: article
	:og:description: array_sum() used to cast the arguments to integers before executing the additions
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/arraySumChecks.html
	:og:locale: en

array_sum() used to cast the arguments to integers before executing the additions. Nowadays, the strange types raise a warning, as illustrated here with the array. 

PHP code
________
.. code-block:: php

   <?php
   
   print array_sum([1, false, []]);
   
   ?>

Before
______
.. code-block:: output

   1

After
______
.. code-block:: output

   PHP Warning:  array_sum(): Addition is not supported on type array
   
   Warning: array_sum(): Addition is not supported on type array
   1


PHP version change
__________________
This behavior changed in 8.3


See Also
________

* `A Comprehensive Guide to PHP's array_sum() Function <https://reintech.io/blog/a-comprehensive-guide-to-phps-array-sum-function>`_


Error Messages
______________

  + `array_sum(): Addition is not supported on type array <https://php-errors.readthedocs.io/en/latest/messages/array_sum%28%29%3A-addition-is-not-supported-on-type-array.html>`_



