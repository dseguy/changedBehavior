.. _array_filter()-validates-its-mode-argument:

array_filter() Validates Its Mode Argument
==========================================
.. meta::
	:description:
		array_filter() Validates Its Mode Argument: ``array_filter()`` accepts a third argument that selects which values are passed to the callback: ``ARRAY_FILTER_USE_VALUE``, ``ARRAY_FILTER_USE_KEY``, or ``ARRAY_FILTER_USE_BOTH``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: array_filter() Validates Its Mode Argument
	:twitter:description: array_filter() Validates Its Mode Argument: ``array_filter()`` accepts a third argument that selects which values are passed to the callback: ``ARRAY_FILTER_USE_VALUE``, ``ARRAY_FILTER_USE_KEY``, or ``ARRAY_FILTER_USE_BOTH``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: array_filter() Validates Its Mode Argument
	:og:type: article
	:og:description: ``array_filter()`` accepts a third argument that selects which values are passed to the callback: ``ARRAY_FILTER_USE_VALUE``, ``ARRAY_FILTER_USE_KEY``, or ``ARRAY_FILTER_USE_BOTH``
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/arrayFilterModeValueError.html
	:og:locale: en

``array_filter()`` accepts a third argument that selects which values are passed to the callback: ``ARRAY_FILTER_USE_VALUE``, ``ARRAY_FILTER_USE_KEY``, or ``ARRAY_FILTER_USE_BOTH``. Until PHP 8.6, any other value was silently treated as ``0`` (``ARRAY_FILTER_USE_VALUE``). In PHP 8.6, an invalid mode throws a ``ValueError``.

PHP code
________
.. code-block:: php

   <?php
   
   var_dump(array_filter([1, 0, 2, null], fn($v) => true, 99));
   
   ?>

Before
______
.. code-block:: output

   array(4) {
     [0]=>
     int(1)
     [1]=>
     int(0)
     [2]=>
     int(2)
     [3]=>
     NULL
   }
   

After
______
.. code-block:: output

   array_filter(): Argument #3 ($mode) must be one of ARRAY_FILTER_USE_VALUE, ARRAY_FILTER_USE_KEY, or ARRAY_FILTER_USE_BOTH


PHP version change
__________________
This behavior changed in 8.6


See Also
________

* `array_filter() <https://www.php.net/array_filter>`_


Error Messages
______________

  + `array_filter(): Argument #3 ($mode) must be one of ARRAY_FILTER_USE_VALUE, ARRAY_FILTER_USE_KEY, or ARRAY_FILTER_USE_BOTH <https://php-errors.readthedocs.io/en/latest/messages/array_filter%28%29%3A-argument-%233-%28%24mode%29-must-be-one-of-array_filter_use_value%2C-array_filter_use_key%2C-or-array_filter_use_both.html>`_



