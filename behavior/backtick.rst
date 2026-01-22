.. _back-tick-operator-is-deprecated:

Back-tick Operator Is Deprecated
================================
.. meta::
	:description:
		Back-tick Operator Is Deprecated: The back tick operator is deprecated, and will be removed in PHP 9.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Back-tick Operator Is Deprecated
	:twitter:description: Back-tick Operator Is Deprecated: The back tick operator is deprecated, and will be removed in PHP 9
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Back-tick Operator Is Deprecated
	:og:type: article
	:og:description: The back tick operator is deprecated, and will be removed in PHP 9
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/backtick.html
	:og:locale: en

The back tick operator is deprecated, and will be removed in PHP 9.0. It should be replaced with a call to ``shell_exec()``, which is the function equivalent. It may also be replaced with any other dedicated feature: for example, listing files in a directory may be replaced with a call to ``scandir()``.

PHP code
________
.. code-block:: php

   <?php
   
   print `echo 'Hello'`;
   
   ?>

Before
______
.. code-block:: output

   Hello

After
______
.. code-block:: output

   PHP Deprecated:  The backtick (`) operator is deprecated, use shell_exec() instead
   
   Deprecated: The backtick (`) operator is deprecated, use shell_exec() instead
   Hello
   


PHP version change
__________________
This behavior was deprecated in 8.5

This behavior changed in 


See Also
________

* `PHP RFC: Deprecations for PHP 8.5 <https://wiki.php.net/rfc/deprecations_php_8_5>`_


Error Messages
______________

  + `The backtick (\`) operator is deprecated, use shell_exec() instead <https://php-errors.readthedocs.io/en/latest/messages/the-backtick-%28%60%29-operator-is-deprecated%2C-use-shell_exec%28%29-instead.html>`_


Analyzer
_________

  + `Php/DeprecatedBackTicks <https://exakat.readthedocs.io/en/latest/Reference/Rules/Php/DeprecatedBackTicks.html>`_



