.. _number_format()-validates-its-decimals-argument-range:

number_format() Validates Its Decimals Argument Range
=====================================================
.. meta::
	:description:
		number_format() Validates Its Decimals Argument Range: ``number_format()``'s ``$decimals`` argument is internally clamped to a 32-bit signed integer range (-2147483648 to 2147483647).
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: number_format() Validates Its Decimals Argument Range
	:twitter:description: number_format() Validates Its Decimals Argument Range: ``number_format()``'s ``$decimals`` argument is internally clamped to a 32-bit signed integer range (-2147483648 to 2147483647)
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: number_format() Validates Its Decimals Argument Range
	:og:type: article
	:og:description: ``number_format()``'s ``$decimals`` argument is internally clamped to a 32-bit signed integer range (-2147483648 to 2147483647)
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/numberFormatDecimalsValueError.html
	:og:locale: en

``number_format()``'s ``$decimals`` argument is internally clamped to a 32-bit signed integer range (-2147483648 to 2147483647). Until PHP 8.6, a value outside that range was silently clamped, for very negative values this collapsed to 0 decimals, and for very large positive values it could trigger a huge memory allocation while building the result string. In PHP 8.6, an out-of-range value throws a ``ValueError`` instead.

PHP code
________
.. code-block:: php

   <?php
   
   try {
       var_dump(number_format(1234.5678, PHP_INT_MIN));
   } catch (\ValueError $e) {
       echo $e->getMessage(), "\n";
   }
   
   ?>

Before
______
.. code-block:: output

   string(1) 0
   

After
______
.. code-block:: output

   number_format(): Argument #2 ($decimals) must be between -2147483648 and 2147483647
   


PHP version change
__________________
This behavior changed in 8.6


See Also
________

* `number_format() <https://www.php.net/number_format>`_


Error Messages
______________

  + `number_format(): Argument #2 ($decimals) must be between -2147483648 and 2147483647 <https://php-errors.readthedocs.io/en/latest/messages/number_format%28%29%3A-argument-%232-%28%24decimals%29-must-be-between--2147483648-and-2147483647.html>`_



