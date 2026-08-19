.. _gmp-shift-operators-validate-a-gmp-right-operand:

GMP Shift Operators Validate A GMP Right Operand
================================================
.. meta::
	:description:
		GMP Shift Operators Validate A GMP Right Operand: The GMP shift operators (``<<`` and ``>>``) accept a right operand outside the range of a regular PHP integer when it is itself a ``GMP`` object.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: GMP Shift Operators Validate A GMP Right Operand
	:twitter:description: GMP Shift Operators Validate A GMP Right Operand: The GMP shift operators (``<<`` and ``>>``) accept a right operand outside the range of a regular PHP integer when it is itself a ``GMP`` object
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: GMP Shift Operators Validate A GMP Right Operand
	:og:type: article
	:og:description: The GMP shift operators (``<<`` and ``>>``) accept a right operand outside the range of a regular PHP integer when it is itself a ``GMP`` object
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/gmpShiftValueError86.html
	:og:locale: en

The GMP shift operators (``<<`` and ``>>``) accept a right operand outside the range of a regular PHP integer when it is itself a ``GMP`` object. Until PHP 8.6, a right operand greater than the platform's unsigned long maximum was silently truncated, producing an incorrect shift amount. In PHP 8.6, a right operand outside the unsigned long range throws a ``ValueError``.

PHP code
________
.. code-block:: php

   <?php
   
   $a = gmp_init(2);
   $huge = gmp_init('18446744073709551616');
   
   try {
       var_dump(gmp_strval($a << $huge));
   } catch (\ValueError $e) {
       echo "ValueError: ".$e->getMessage()."\n";
   }
   
   ?>
   

Before
______
.. code-block:: output

   string(1) "2" 
   

After
______
.. code-block:: output

   ValueError: Shift must be between 0 and 18446744073709551615
   


PHP version change
__________________
This behavior changed in 8.6


See Also
________

* `GMP <https://www.php.net/gmp>`_


Error Messages
______________

  + `Shift must be between 0 and 18446744073709551615 <https://php-errors.readthedocs.io/en/latest/messages/gmp-shift-operators-validate-a-gmp-right-operand.html>`_



