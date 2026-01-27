.. _finfo-moved-away-from-resource:

Finfo Moved Away From Resource
==============================
.. meta::
	:description:
		Finfo Moved Away From Resource: ``Finfo`` functions have moved from resource to objects in PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Finfo Moved Away From Resource
	:twitter:description: Finfo Moved Away From Resource: ``Finfo`` functions have moved from resource to objects in PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Finfo Moved Away From Resource
	:og:type: article
	:og:description: ``Finfo`` functions have moved from resource to objects in PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/finfo_open.html
	:og:locale: en

``Finfo`` functions have moved from resource to objects in PHP 8.1. Instead of returning a resource, it now returns a finfo object. Checks based on is_resource() must be upgraded, and are now dead code.

PHP code
________
.. code-block:: php

   <?php
   
   var_dump(finfo_open());
   
   ?>

Before
______
.. code-block:: output

   resource(4) of type (file_info)
   

After
______
.. code-block:: output

   object(finfo)#1 (0) {
   }
   


PHP version change
__________________
This behavior changed in 8.1


See Also
________

* `finfo_open <https://www.php.net/manual/fr/function.finfo-open.php>`_



