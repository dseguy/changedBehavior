.. _`e_strict-is-deprecated`:

E_STRICT Is Deprecated
======================
.. meta::
	:description:
		E_STRICT Is Deprecated: The PHP native constant ``E_STRICT`` is deprecated, and will be removed in PHP 9.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: E_STRICT Is Deprecated
	:twitter:description: E_STRICT Is Deprecated: The PHP native constant ``E_STRICT`` is deprecated, and will be removed in PHP 9
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: E_STRICT Is Deprecated
	:og:type: article
	:og:description: The PHP native constant ``E_STRICT`` is deprecated, and will be removed in PHP 9
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/e_strict.html
	:og:locale: en

The PHP native constant ``E_STRICT`` is deprecated, and will be removed in PHP 9.0.

PHP code
________
.. code-block:: php

   <?php
   
   var_dump(error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT));
   
   ?>

Before
______
.. code-block:: output

   int(32767)
   

After
______
.. code-block:: output

   PHP Deprecated:  Constant E_STRICT is deprecated in /codes/e_strict.php on line 3
   
   Deprecated: Constant E_STRICT is deprecated in /codes/e_strict.php on line 3
   int(30719)
   


PHP version change
__________________
This behavior was deprecated in 8.4

This behavior changed in 9.0


See Also
________

* `E_STRICT deprecated <https://php.watch/versions/8.4/E_STRICT-deprecated>`_


Error Messages
______________

  + `Constant %s is deprecated <https://php-errors.readthedocs.io/en/latest/messages/constant-%25s-is-deprecated.html>`_



