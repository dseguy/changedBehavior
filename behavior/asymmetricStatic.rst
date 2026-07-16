.. _static-properties-with-asymmetric-visibility:

Static Properties With Asymmetric Visibility
============================================
.. meta::
	:description:
		Static Properties With Asymmetric Visibility: Asymmetric visibility was introduced in version 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Static Properties With Asymmetric Visibility
	:twitter:description: Static Properties With Asymmetric Visibility: Asymmetric visibility was introduced in version 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Static Properties With Asymmetric Visibility
	:og:type: article
	:og:description: Asymmetric visibility was introduced in version 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/asymmetricStatic.html
	:og:locale: en

Asymmetric visibility was introduced in version 8.4. In that version, the asymmetric visibility was limited to non-static properties. In PHP 8.5, that feature is now extended to static properties.

PHP code
________
.. code-block:: php

   <?php
   
   class x {
       public private(set) static int $a = 3;
   }
   
   ?>

Before
______
.. code-block:: output

   PHP Fatal error:  Static property may not have asymmetric visibility
   
   Fatal error: Static property may not have asymmetric visibility
   

After
______
.. code-block:: output

   


PHP version change
__________________
This behavior changed in 8.5-


Error Messages
______________

  + `Static property may not have asymmetric visibility <https://php-errors.readthedocs.io/en/latest/messages/static-property-may-not-have-asymmetric-visibility.html>`_



