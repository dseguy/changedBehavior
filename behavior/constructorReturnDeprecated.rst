.. _returning-a-value-from-a-constructor-is-deprecated:

Returning A Value From A Constructor Is Deprecated
==================================================
.. meta::
	:description:
		Returning A Value From A Constructor Is Deprecated: A constructor's return value was always ignored by PHP, silently.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Returning A Value From A Constructor Is Deprecated
	:twitter:description: Returning A Value From A Constructor Is Deprecated: A constructor's return value was always ignored by PHP, silently
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Returning A Value From A Constructor Is Deprecated
	:og:type: article
	:og:description: A constructor's return value was always ignored by PHP, silently
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/constructorReturnDeprecated.html
	:og:locale: en

A constructor's return value was always ignored by PHP, silently. In PHP 8.6, returning any value, other than not returning at all, from ``__construct()`` emits a deprecation notice. The same applies to ``__destruct()``.

PHP code
________
.. code-block:: php

   <?php
   
   class x {
       public function __construct() {
           return 5;
       }
   }
   
   new x();
   print "done\n";
   
   ?>

Before
______
.. code-block:: output

   done
   

After
______
.. code-block:: output

   PHP Deprecated:  Returning a value from a constructor is deprecated
   
   Deprecated: Returning a value from a constructor is deprecated
   done
   


PHP version change
__________________
This behavior was deprecated in 8.6

This behavior changed in 


See Also
________

* `PHP 8.6 NEWS <https://www.php.net/ChangeLog-8.php#8.6.0>`_


Error Messages
______________

  + `Returning a value from a constructor is deprecated <https://php-errors.readthedocs.io/en/latest/messages/returning-a-value-from-a-constructor-is-deprecated.html>`_



