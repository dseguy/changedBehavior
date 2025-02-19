.. _`anonymous-class-name-includes-extends`:

Anonymous Class Name Includes Extends
=====================================
.. meta::
	:description:
		Anonymous Class Name Includes Extends: The fully qualified name of an anonymous class (sic) includes the parent class as the first part of the name, since PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Anonymous Class Name Includes Extends
	:twitter:description: Anonymous Class Name Includes Extends: The fully qualified name of an anonymous class (sic) includes the parent class as the first part of the name, since PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Anonymous Class Name Includes Extends
	:og:type: article
	:og:description: The fully qualified name of an anonymous class (sic) includes the parent class as the first part of the name, since PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/anonymousSignature.html
	:og:locale: en

The fully qualified name of an anonymous class (sic) includes the parent class as the first part of the name, since PHP 8.0. 



In previous versions, it only used ``class``. 



It also includes the mention ``anonymous``, the name of the file and the line number. The parent name is the fully qualified name, so it includes the namespace, except for the initial backaslash (hence, here, it is not displayed).

PHP code
________
.. code-block:: php

   <?php
   
   $object = new class() extends \Exception {};
   
   echo get_class($object);
   
   ?>

Before
______
.. code-block:: output

   class@anonymous /codes/anonymousSignature.php:3

After
______
.. code-block:: output

   Exception@anonymous /codes/anonymousSignature.php:3


PHP version change
__________________
This behavior changed in 8.0


