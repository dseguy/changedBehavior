.. _`non-canonical-cast`:

Non-canonical Cast
==================
.. meta::
	:description:
		Non-canonical Cast: Non canonical cast operators ``(integer)``, ``(binary)``, ``(double)``, ``(boolean)`` are deprecated, since PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Non-canonical Cast
	:twitter:description: Non-canonical Cast: Non canonical cast operators ``(integer)``, ``(binary)``, ``(double)``, ``(boolean)`` are deprecated, since PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Non-canonical Cast
	:og:type: article
	:og:description: Non canonical cast operators ``(integer)``, ``(binary)``, ``(double)``, ``(boolean)`` are deprecated, since PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/nonCanonicalCast.html
	:og:locale: en

Non canonical cast operators ``(integer)``, ``(binary)``, ``(double)``, ``(boolean)`` are deprecated, since PHP 8.5.

PHP code
________
.. code-block:: php

   <?php
   
   print (integer) 2;
   print (double) 2;
   print (boolean) 2;
   print (binary) 2;
   
   ?>

Before
______
.. code-block:: output

   2212

After
______
.. code-block:: output

   PHP Deprecated:  Non-canonical cast (integer) is deprecated, use the (int) cast instead
   
   Deprecated: Non-canonical cast (integer) is deprecated, use the (int) cast instead
   PHP Deprecated:  Non-canonical cast (double) is deprecated, use the (float) cast instead
   
   Deprecated: Non-canonical cast (double) is deprecated, use the (float) cast instead
   PHP Deprecated:  Non-canonical cast (boolean) is deprecated, use the (bool) cast instead
   
   Deprecated: Non-canonical cast (boolean) is deprecated, use the (bool) cast instead
   PHP Deprecated:  Non-canonical cast (binary) is deprecated, use the (string) cast instead
   
   Deprecated: Non-canonical cast (binary) is deprecated, use the (string) cast instead
   2212


PHP version change
__________________
This behavior changed in 8.5



