.. _`using-__autoload()-is-deprecated`:

Using __autoload() is deprecated
================================
.. meta::
	:description:
		Using __autoload() is deprecated: Defining the ``__autoload()`` function used to be the way to create a autoloading mechanism for classes, traits, interfaces and enumerations.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Using __autoload() is deprecated
	:twitter:description: Using __autoload() is deprecated: Defining the ``__autoload()`` function used to be the way to create a autoloading mechanism for classes, traits, interfaces and enumerations
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Using __autoload() is deprecated
	:og:type: article
	:og:description: Defining the ``__autoload()`` function used to be the way to create a autoloading mechanism for classes, traits, interfaces and enumerations
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/autoload.html
	:og:locale: en

Defining the ``__autoload()`` function used to be the way to create a autoloading mechanism for classes, traits, interfaces and enumerations. This was later replaced by the spl_autoload_register() function, which allows adding and removing autoloading functions. Ever since, creating the __autoload() function is reported as deprecated, and the function is not used since PHP 8.0.

PHP code
________
.. code-block:: php

   <?php
   
   function __autoload() {}
   
   ?>

Before
______
.. code-block:: output

   PHP Fatal error:  __autoload() is no longer supported, use spl_autoload_register() instead in /codes/autoload.php on line 3
   
   Fatal error: __autoload() is no longer supported, use spl_autoload_register() instead in /codes/autoload.php on line 3
   

After
______
.. code-block:: output

   PHP Fatal error:  __autoload() is no longer supported, use spl_autoload_register() instead in /codes/autoload.php on line 3
   Stack trace:
   #0 {main}
   
   Fatal error: __autoload() is no longer supported, use spl_autoload_register() instead in /codes/autoload.php on line 3
   Stack trace:
   #0 {main}
   


PHP version change
__________________
This behavior changed in 8.0


