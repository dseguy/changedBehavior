.. _no-dynamic-properties-by-default:

No Dynamic Properties By Default
================================
.. meta::
	:description:
		No Dynamic Properties By Default: Properties never required a definition before usage, just like variables.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: No Dynamic Properties By Default
	:twitter:description: No Dynamic Properties By Default: Properties never required a definition before usage, just like variables
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: No Dynamic Properties By Default
	:og:type: article
	:og:description: Properties never required a definition before usage, just like variables
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/dynamicProperties.html
	:og:locale: en

Properties never required a definition before usage, just like variables. They could be added at any moment in any object. 



In PHP 8.2, this is now a deprecated behavior. The property must be declared before usage. Visibility, type and default value are optional as before, so the requirement is to add the property in the class. 



It is also possible to skip that warning by extending explicitly the stdClass; by adding the #[AllowDynamicProperties] attribute or by creating the magic property method __get or __set, depending on the usage.



PHP code
________
.. code-block:: php

   <?php
   
   class x {} 
   
   $x = new x;
   $x->property = 1; 
   echo $x->property;
   
   ?>

Before
______
.. code-block:: output

   1

After
______
.. code-block:: output

   PHP Deprecated:  Creation of dynamic property x::$p is deprecated
   
   Deprecated: Creation of dynamic property x::$p is deprecated
   1


PHP version change
__________________
This behavior was deprecated in 8.2

This behavior changed in 9.0


See Also
________

* `PHP 8.2: Dynamic Properties are deprecated <https://php.watch/versions/8.2/dynamic-properties-deprecated>`_


Error Messages
______________

  + `Creation of dynamic property User::$name is deprecated <https://php-errors.readthedocs.io/en/latest/messages/creation-of-dynamic-property-%25s%3A%3A%24%25s-is-deprecated.html>`_


Analyzer
_________

  + `Classes/UndefinedProperty <https://exakat.readthedocs.io/en/latest/Reference/Rules/Classes/UndefinedProperty.html>`_



