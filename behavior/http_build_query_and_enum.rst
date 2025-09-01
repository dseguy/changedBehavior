.. _`http_build_query()-supports-enumerations`:

http_build_query() supports enumerations
========================================
.. meta::
	:description:
		http_build_query() supports enumerations: http_build_query() accepted backed enumerations, and used to produce a query string with a ``b`` array, containing ``value`` and ``name``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: http_build_query() supports enumerations
	:twitter:description: http_build_query() supports enumerations: http_build_query() accepted backed enumerations, and used to produce a query string with a ``b`` array, containing ``value`` and ``name``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: http_build_query() supports enumerations
	:og:type: article
	:og:description: http_build_query() accepted backed enumerations, and used to produce a query string with a ``b`` array, containing ``value`` and ``name``
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/http_build_query_and_enum.html
	:og:locale: en

http_build_query() accepted backed enumerations, and used to produce a query string with a ``b`` array, containing ``value`` and ``name``. Since PHP 8.4, it is now using the string value of the case.

PHP code
________
.. code-block:: php

   <?php
   
   enum E : string {
       case B = 'b';
   }
   
   print http_build_query(['a' => 'A', 'b' => e::B]);
   
   ?>

Before
______
.. code-block:: output

   a=A&b%5Bname%5D=B&b%5Bvalue%5D=b

After
______
.. code-block:: output

   a=A&b=b


PHP version change
__________________
This behavior changed in 8.4



