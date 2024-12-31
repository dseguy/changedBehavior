.. _`__set_state()-method-must-be-static`:

__set_state() Method Must Be Static
===================================
.. meta::
	:description:
		__set_state() Method Must Be Static: Starting with PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: __set_state() Method Must Be Static
	:twitter:description: __set_state() Method Must Be Static: Starting with PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: __set_state() Method Must Be Static
	:og:type: article
	:og:description: Starting with PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/set_state_must_be_static.html
	:og:locale: en

Starting with PHP 8.0, the magic method __set_state() must be static when declared in a class.

PHP code
________
.. code-block:: php

   <?php
   
   class x {
       function __set_state() {}
       
   }

Before
______
.. code-block:: output

   

After
______
.. code-block:: output

   PHP Fatal error:  Method x::__set_state() must be static
   
   Fatal error: Method x::__set_state() must be static
   


PHP version change
__________________
This behavior changed in 8.0


See Also
________

* `__set_state() <https://www.php.net/manual/en/language.oop5.magic.php#object.set-state>`_


Error Messages
______________

  + `Method x::__set_state() must be static <https://php-errors.readthedocs.io/en/latest/messages/Method+x%3A%3A__set_state%28%29+must+be+static.html>`_



