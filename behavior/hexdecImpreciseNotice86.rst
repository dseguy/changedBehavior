.. _hexdec()-warns-when-the-result-loses-precision:

hexdec() Warns When The Result Loses Precision
==============================================
.. meta::
	:description:
		hexdec() Warns When The Result Loses Precision: ``hexdec()``, ``bindec()``, ``octdec()`` and ``base_convert()`` return a ``float`` when the converted number is too large to fit in a PHP integer.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: hexdec() Warns When The Result Loses Precision
	:twitter:description: hexdec() Warns When The Result Loses Precision: ``hexdec()``, ``bindec()``, ``octdec()`` and ``base_convert()`` return a ``float`` when the converted number is too large to fit in a PHP integer
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: hexdec() Warns When The Result Loses Precision
	:og:type: article
	:og:description: ``hexdec()``, ``bindec()``, ``octdec()`` and ``base_convert()`` return a ``float`` when the converted number is too large to fit in a PHP integer
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/hexdecImpreciseNotice86.html
	:og:locale: en

``hexdec()``, ``bindec()``, ``octdec()`` and ``base_convert()`` return a ``float`` when the converted number is too large to fit in a PHP integer. Until PHP 8.6, this silently lost precision, since a 64-bit float cannot represent every integer up to the represented magnitude exactly. In PHP 8.6, these functions raise a notice when the returned value cannot precisely represent the input number.

PHP code
________
.. code-block:: php

   <?php
   
   var_dump(hexdec('FFFFFFFFFFFFFFFFFF'));
   
   ?>
   

Before
______
.. code-block:: output

   float(4.722366482869645E+21)
   

After
______
.. code-block:: output

   PHP Notice:  Input number is larger than PHP_INT_MAX, precision has been lost in conversion in /codes/hexdecImpreciseNotice86.php on line 3
   
   Notice: Input number is larger than PHP_INT_MAX, precision has been lost in conversion in /codes/hexdecImpreciseNotice86.php on line 3
   float(4.722366482869645E+21)
   


PHP version change
__________________
This behavior changed in 8.6


See Also
________

* `hexdec() <https://www.php.net/hexdec>`_


Error Messages
______________

  + `Input number is larger than PHP_INT_MAX, precision has been lost in conversion <https://php-errors.readthedocs.io/en/latest/messages/hexdec%28%29-warns-when-the-result-loses-precision.html>`_



