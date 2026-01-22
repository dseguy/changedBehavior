.. _var_export()-format:

var_export() Format
===================
.. meta::
	:description:
		var_export() Format: PHP used to export an object with a fully qualified name, except for the first backslash.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: var_export() Format
	:twitter:description: var_export() Format: PHP used to export an object with a fully qualified name, except for the first backslash
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: var_export() Format
	:og:type: article
	:og:description: PHP used to export an object with a fully qualified name, except for the first backslash
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/var_export.html
	:og:locale: en

PHP used to export an object with a fully qualified name, except for the first backslash. Since PHP 8.2, the name is a fully qualified one, and may be used in any namespace, without adaptation.

PHP code
________
.. code-block:: php

   <?php
   
   class X {}
   
   var_export(new X);
   
   ?>

Before
______
.. code-block:: output

   \X::__set_state(array(
   ))

After
______
.. code-block:: output

   \\X::__set_state(array(
   ))


PHP version change
__________________
This behavior changed in 8.2


See Also
________

* `var_export() combined with enum produces code unsuitable for inclusion in namespaces <https://github.com/php/php-src/issues/8232>`_
* `Add leading backslash to enum and class names in var_export <https://externals.io/message/117466>`_



