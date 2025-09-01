.. _`spaces-in-namespaces`:

Spaces In Namespaces
====================
.. meta::
	:description:
		Spaces In Namespaces: It used to be valid syntax to have a new line or a space in a namespace name.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Spaces In Namespaces
	:twitter:description: Spaces In Namespaces: It used to be valid syntax to have a new line or a space in a namespace name
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Spaces In Namespaces
	:og:type: article
	:og:description: It used to be valid syntax to have a new line or a space in a namespace name
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/spaces_in_namespaces.html
	:og:locale: en

It used to be valid syntax to have a new line or a space in a namespace name. This is not the case in PHP 8.0 anymore.

PHP code
________
.. code-block:: php

   <?php
   
   namespace Vendor
   \Package;
   
   echo 1;
   
   ?>

Before
______
.. code-block:: output

   1

After
______
.. code-block:: output

   PHP Parse error:  syntax error, unexpected fully qualified name "\Package", expecting "{" in /codes/spaces_in_namespaces.php on line 4
   
   Parse error: syntax error, unexpected fully qualified name "\Package", expecting "{" in /codes/spaces_in_namespaces.php on line 4
   


PHP version change
__________________
This behavior changed in 8.0



