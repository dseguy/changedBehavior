.. _namespace-is-not-valid-as-a-class-constant-name:

namespace Is Not Valid As A Class Constant Name
===============================================
.. meta::
	:description:
		namespace Is Not Valid As A Class Constant Name: namespace is a PHP keyword, and it is allowed inside class for naming methods or properties.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: namespace Is Not Valid As A Class Constant Name
	:twitter:description: namespace Is Not Valid As A Class Constant Name: namespace is a PHP keyword, and it is allowed inside class for naming methods or properties
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: namespace Is Not Valid As A Class Constant Name
	:og:type: article
	:og:description: namespace is a PHP keyword, and it is allowed inside class for naming methods or properties
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/namespaceClassConst.html
	:og:locale: en

namespace is a PHP keyword, and it is allowed inside class for naming methods or properties. After PHP 8.6, it is not possible to use it for constant name.



The actual motivation is a future feature: reserving namespace would allow a future ``::namespace`` pseudo-constant, analogous to ``::class``, for directory namespaces. For example, replacing stringy APIs like ``Order\Domain\Entities`` with ``\Order\Domain\Entities::namespace``, which gives you IDE support, refactoring, and static analysis for free.

PHP code
________
.. code-block:: php

   <?php
   
   class x { const namespace= 1;}
   
   echo x::namespace;
   
   ?>

Before
______
.. code-block:: output

   1

After
______
.. code-block:: output

   PHP Deprecated:  Declaring class constant called 'namespace' is deprecated in /codes/namespaceClassConst.php on line 3
   
   Deprecated: Declaring class constant called 'namespace' is deprecated in /codes/namespaceClassConst.php on line 3
   1


PHP version change
__________________
This behavior was deprecated in 8.6

This behavior changed in 8.6


See Also
________

* `PHP RFC: PHP Namespace Policy <https://wiki.php.net/rfc/deprecations_php_8_6>`_


Error Messages
______________

  + `Declaring class constant called 'namespace' is deprecated <https://php-errors.readthedocs.io/en/latest/messages/Declaring+class+constant+called+%27namespace%27+is+deprecated.html>`_



