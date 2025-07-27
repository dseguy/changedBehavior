.. _`libxml_disable_entity_loader()-is-deprecated`:

libxml_disable_entity_loader() Is Deprecated
============================================
.. meta::
	:description:
		libxml_disable_entity_loader() Is Deprecated: libxml_disable_entity_loader() has been deprecated since PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: libxml_disable_entity_loader() Is Deprecated
	:twitter:description: libxml_disable_entity_loader() Is Deprecated: libxml_disable_entity_loader() has been deprecated since PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: libxml_disable_entity_loader() Is Deprecated
	:og:type: article
	:og:description: libxml_disable_entity_loader() has been deprecated since PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/libxml_disable_entity_loader.html
	:og:locale: en

libxml_disable_entity_loader() has been deprecated since PHP 8.0, and actually, does not execute any code. The error message was upgraded to make it more explicit.

PHP code
________
.. code-block:: php

   <?php
   
   var_dump(libxml_disable_entity_loader(true));

Before
______
.. code-block:: output

   PHP Deprecated:  Function libxml_disable_entity_loader() is deprecated in /codes/libxml_disable_entity_loader.php on line 3
   
   Deprecated: Function libxml_disable_entity_loader() is deprecated in /codes/libxml_disable_entity_loader.php on line 3
   bool(false)
   

After
______
.. code-block:: output

   PHP Deprecated:  Function libxml_disable_entity_loader() is deprecated since 8.0, as external entity loading is disabled by default in /codes/libxml_disable_entity_loader.php on line 3
   
   Deprecated: Function libxml_disable_entity_loader() is deprecated since 8.0, as external entity loading is disabled by default in /codes/libxml_disable_entity_loader.php on line 3
   bool(false)
   


PHP version change
__________________
This behavior changed in 8.0


