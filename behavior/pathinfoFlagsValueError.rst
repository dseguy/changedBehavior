.. _pathinfo()-validates-its-flags-argument:

pathinfo() Validates Its Flags Argument
=======================================
.. meta::
	:description:
		pathinfo() Validates Its Flags Argument: ``pathinfo()`` accepts a second argument made of ``PATHINFO_*`` constants.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: pathinfo() Validates Its Flags Argument
	:twitter:description: pathinfo() Validates Its Flags Argument: ``pathinfo()`` accepts a second argument made of ``PATHINFO_*`` constants
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: pathinfo() Validates Its Flags Argument
	:og:type: article
	:og:description: ``pathinfo()`` accepts a second argument made of ``PATHINFO_*`` constants
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/pathinfoFlagsValueError.html
	:og:locale: en

``pathinfo()`` accepts a second argument made of ``PATHINFO_*`` constants. Until PHP 8.6, any other value was silently accepted, and the whole set of parts was returned. In PHP 8.6, an invalid value throws a ``ValueError``.

PHP code
________
.. code-block:: php

   <?php
   
   var_dump(pathinfo('/foo/bar.txt', 999));
   
   ?>

Before
______
.. code-block:: output

   string(4) /foo
   

After
______
.. code-block:: output

   pathinfo(): Argument #2 ($flags) must be one of the PATHINFO_* constants


PHP version change
__________________
This behavior changed in 8.6


See Also
________

* `pathinfo() <https://www.php.net/pathinfo>`_


Error Messages
______________

  + `pathinfo(): Argument #2 ($flags) must be one of the PATHINFO_* constants <https://php-errors.readthedocs.io/en/latest/messages/pathinfo%28%29%3A-argument-%232-%28%24flags%29-must-be-one-of-the-pathinfo_%2A-constants.html>`_



