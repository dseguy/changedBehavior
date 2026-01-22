.. _strpos()-emits-typeerror:

strpos() Emits TypeError
========================
.. meta::
	:description:
		strpos() Emits TypeError: strpos() and stripos() emit a ``TypeError`` when the offset is of the wrong type.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: strpos() Emits TypeError
	:twitter:description: strpos() Emits TypeError: strpos() and stripos() emit a ``TypeError`` when the offset is of the wrong type
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: strpos() Emits TypeError
	:og:type: article
	:og:description: strpos() and stripos() emit a ``TypeError`` when the offset is of the wrong type
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/strposTypeError.html
	:og:locale: en

strpos() and stripos() emit a ``TypeError`` when the offset is of the wrong type. In PHP 7.4, it emitted a warning.

PHP code
________
.. code-block:: php

   <?php
   strpos('a', 'abc', null);
   ?>

Before
______
.. code-block:: output

   PHP Warning:  strpos() expects parameter 3 to be int, string given

After
______
.. code-block:: output

   PHP Fatal error:  Uncaught TypeError: strpos(): Argument #3 ($offset) must be of type int, string given


PHP version change
__________________
This behavior changed in 8.0


Error Messages
______________

  + `Argument #3 ($offset) must be of type int, string given <https://php-errors.readthedocs.io/en/latest/messages/must-be-of-type-%25s%2C-%25s-given.html>`_



