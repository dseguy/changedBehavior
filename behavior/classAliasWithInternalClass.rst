.. _`class_alias()-works-on-internal-classes`:

class_alias() Works On Internal Classes
=======================================
.. meta::
	:description:
		class_alias() Works On Internal Classes: class_alias() makes an alias for a class, an enumeration, an interface or a trait.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: class_alias() Works On Internal Classes
	:twitter:description: class_alias() Works On Internal Classes: class_alias() makes an alias for a class, an enumeration, an interface or a trait
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: class_alias() Works On Internal Classes
	:og:type: article
	:og:description: class_alias() makes an alias for a class, an enumeration, an interface or a trait
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/classAliasWithInternalClass.html
	:og:locale: en

class_alias() makes an alias for a class, an enumeration, an interface or a trait. Until PHP 8.3, it was only possible on custom structures.

PHP code
________
.. code-block:: php

   <?php
   
   class_alias(stdClass::class, A::class);
   
   var_dump(new A);

Before
______
.. code-block:: output

   First argument of class_alias() must be a name of user defined class

After
______
.. code-block:: output

   object(stdClass)#1 (0) {
   }


PHP version change
__________________
This behavior changed in 8.3


See Also
________

* `class_alias() <https://php.net/class_alias>`_


Error Messages
______________

  + `must be a user-defined class name, internal class name given <https://php-errors.readthedocs.io/en/latest/messages/must-be-a-user-defined-class-name%2C-internal-class-name-given.html>`_



