.. _underscore-named-class:

Underscore Named Class
======================
.. meta::
	:description:
		Underscore Named Class: It is not possible to name a class ``_`` underscore anymore.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Underscore Named Class
	:twitter:description: Underscore Named Class: It is not possible to name a class ``_`` underscore anymore
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Underscore Named Class
	:og:type: article
	:og:description: It is not possible to name a class ``_`` underscore anymore
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/ClassUnderscore.html
	:og:locale: en

It is not possible to name a class ``_`` underscore anymore. 



This applies to classes, interfaces, traits and enumerations. It applies in every namespace.



It does not applies to functions, although that name is usually a native PHP function from the ``gettext`` extension. It also does not apply to constants, methods, class constants and variables. 



It is still possible to name a class with a longer name, starting with an underscore.



The ``_`` is being reserved for the future pattern matching feature of PHP.

PHP code
________
.. code-block:: php

   <?php
   
   class _ {}
   
   print get_class(new _);
   
   ?>

Before
______
.. code-block:: output

   _

After
______
.. code-block:: output

   PHP Deprecated:  Using _ as a class name is deprecated since 8.4
   
   Deprecated: Using _ as a class name is deprecated since 8.4
   _


PHP version change
__________________
This behavior changed in 8.4


Error Messages
______________

  + `Using "_" as %s is deprecated since 8.4 <https://php-errors.readthedocs.io/en/latest/messages/using-%22_%22-as-%25s-is-deprecated-since-8.4.html>`_


Analyzer
_________

  + `Php/NoClassUnderscore <https://exakat.readthedocs.io/en/latest/Reference/Rules/Php/NoClassUnderscore.html>`_



