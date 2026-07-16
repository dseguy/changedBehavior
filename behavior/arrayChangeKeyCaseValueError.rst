.. _array_change_key_case()-validates-its-case-argument:

array_change_key_case() Validates Its Case Argument
===================================================
.. meta::
	:description:
		array_change_key_case() Validates Its Case Argument: ``array_change_key_case()`` accepts a second argument, either ``CASE_LOWER`` or ``CASE_UPPER``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: array_change_key_case() Validates Its Case Argument
	:twitter:description: array_change_key_case() Validates Its Case Argument: ``array_change_key_case()`` accepts a second argument, either ``CASE_LOWER`` or ``CASE_UPPER``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: array_change_key_case() Validates Its Case Argument
	:og:type: article
	:og:description: ``array_change_key_case()`` accepts a second argument, either ``CASE_LOWER`` or ``CASE_UPPER``
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/arrayChangeKeyCaseValueError.html
	:og:locale: en

``array_change_key_case()`` accepts a second argument, either ``CASE_LOWER`` or ``CASE_UPPER``. Until PHP 8.6, any other value was silently treated as ``CASE_LOWER``. In PHP 8.6, an invalid value throws a ``ValueError``.

PHP code
________
.. code-block:: php

   <?php
   
   var_dump(array_change_key_case(['A' => 1], 99));
   
   ?>

Before
______
.. code-block:: output

   array(1) {
     [A]=>
     int(1)
   }
   

After
______
.. code-block:: output

   array_change_key_case(): Argument #2 ($case) must be either CASE_LOWER or CASE_UPPER


PHP version change
__________________
This behavior changed in 8.6


See Also
________

* `array_change_key_case() <https://www.php.net/array_change_key_case>`_


Error Messages
______________

  + `array_change_key_case(): Argument #2 ($case) must be either CASE_LOWER or CASE_UPPER <https://php-errors.readthedocs.io/en/latest/messages/array_change_key_case%28%29%3A-argument-%232-%28%24case%29-must-be-either-case_lower-or-case_upper.html>`_



