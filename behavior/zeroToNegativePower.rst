.. _`cannot-raise-zero-to-negative-powers`:

Cannot Raise Zero To Negative Powers
====================================
.. meta::
	:description:
		Cannot Raise Zero To Negative Powers: Raising 0 to a negative power used to generate a INF value (infinity).
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot Raise Zero To Negative Powers
	:twitter:description: Cannot Raise Zero To Negative Powers: Raising 0 to a negative power used to generate a INF value (infinity)
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Cannot Raise Zero To Negative Powers
	:og:type: article
	:og:description: Raising 0 to a negative power used to generate a INF value (infinity)
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/zeroToNegativePower.html
	:og:locale: en

Raising 0 to a negative power used to generate a INF value (infinity). The standard behavior is to generate a DivisionByZeroError, as this is not mathematically allowed. This behavior is deprecated in PHP 8.4, and will be removed in PHP 8.4. During the transition, a function called fpow() is provided, with the new behavior.

PHP code
________
.. code-block:: php

   <?php
   
   var_dump(0 ** -1); //Deprecated: Zero raised to a negative power is deprecated
   
   ?>

Before
______
.. code-block:: output

   float(INF)
   

After
______
.. code-block:: output

   PHP Deprecated:  Power of base 0 and negative exponent is deprecated
   
   Deprecated: Power of base 0 and negative exponent is deprecated
   float(INF)
   


PHP version change
__________________
This behavior was deprecated in 8.4

This behavior changed in 9.0


See Also
________

* `fpow <https://www.php.net/manual/fr/function.fpow.php>`_
* `pow <https://www.php.net/manual/fr/function.pow.php>`_


Error Messages
______________

  + `0 <https://php-errors.readthedocs.io/en/latest/messages/.html>`_
  + `Power of base 0 and negative exponent is deprecated <https://php-errors.readthedocs.io/en/latest/messages/power-of-base-0-and-negative-exponent-is-deprecated.html>`_


Analyzer
_________

  + `Structures/NegativePow <https://exakat.readthedocs.io/en/latest/Reference/Rules/Structures/NegativePow.html>`_



