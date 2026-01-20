.. _`curl-moved-away-from-resource`:

cUrl Moved Away From Resource
=============================
.. meta::
	:description:
		cUrl Moved Away From Resource: Curl functions have moved from resource to objects in PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: cUrl Moved Away From Resource
	:twitter:description: cUrl Moved Away From Resource: Curl functions have moved from resource to objects in PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: cUrl Moved Away From Resource
	:og:type: article
	:og:description: Curl functions have moved from resource to objects in PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/curl_init.html
	:og:locale: en

Curl functions have moved from resource to objects in PHP 8.0. Instead of returning a resource, it now returns a ``CurlHandle`` object. Checks based on is_resource() must be upgraded, and are now dead code.

PHP code
________
.. code-block:: php

   <?php
   
   var_dump(curl_init('https://www.php.net'));
   
   ?>

Before
______
.. code-block:: output

   resource(4) of type (curl)
   

After
______
.. code-block:: output

   object(CurlHandle)#1 (0) {
   }
   


PHP version change
__________________
This behavior changed in 8.0


See Also
________

* `curl_init <https://www.php.net/manual/fr/function.curl-init.php>`_



