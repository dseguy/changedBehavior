.. _usleep()-validates-its-microseconds-argument-range:

usleep() Validates Its Microseconds Argument Range
==================================================
.. meta::
	:description:
		usleep() Validates Its Microseconds Argument Range: ``usleep()``'s ``$microseconds`` argument is passed to the operating system as an unsigned integer.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: usleep() Validates Its Microseconds Argument Range
	:twitter:description: usleep() Validates Its Microseconds Argument Range: ``usleep()``'s ``$microseconds`` argument is passed to the operating system as an unsigned integer
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: usleep() Validates Its Microseconds Argument Range
	:og:type: article
	:og:description: ``usleep()``'s ``$microseconds`` argument is passed to the operating system as an unsigned integer
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/usleepOverflowValueError86.html
	:og:locale: en

``usleep()``'s ``$microseconds`` argument is passed to the operating system as an unsigned integer. Until PHP 8.6, a value greater than ``UINT_MAX`` (4294967295) silently overflowed, which could make the function sleep for a much shorter time than requested. In PHP 8.6, a value greater than ``UINT_MAX`` throws a ``ValueError`` instead.

PHP code
________
.. code-block:: php

   <?php
   
   try {
       var_dump(usleep(4294967296));
   } catch (\ValueError $e) {
       echo "ValueError: ".$e->getMessage()."\n";
   }
   
   ?>
   

Before
______
.. code-block:: output

   NULL
   

After
______
.. code-block:: output

   ValueError: usleep(): Argument #1 ($microseconds) must be between 0 and 4294967295
   


PHP version change
__________________
This behavior changed in 8.6


See Also
________

* `usleep() <https://www.php.net/usleep>`_


Error Messages
______________

  + `ValueError: usleep(): Argument #1 ($microseconds) must be between 0 and 4294967295 <https://php-errors.readthedocs.io/en/latest/messages/must-be-between-0-and-4294967295.html>`_



