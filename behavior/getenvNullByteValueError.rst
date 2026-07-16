.. _getenv()-rejects-nul-bytes-in-the-variable-name:

getenv() Rejects NUL Bytes In The Variable Name
===============================================
.. meta::
	:description:
		getenv() Rejects NUL Bytes In The Variable Name: ``getenv()`` used to accept a variable name containing a NUL byte, and simply returned ``false`` since no such variable can exist.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: getenv() Rejects NUL Bytes In The Variable Name
	:twitter:description: getenv() Rejects NUL Bytes In The Variable Name: ``getenv()`` used to accept a variable name containing a NUL byte, and simply returned ``false`` since no such variable can exist
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: getenv() Rejects NUL Bytes In The Variable Name
	:og:type: article
	:og:description: ``getenv()`` used to accept a variable name containing a NUL byte, and simply returned ``false`` since no such variable can exist
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/getenvNullByteValueError.html
	:og:locale: en

``getenv()`` used to accept a variable name containing a NUL byte, and simply returned ``false`` since no such variable can exist. In PHP 8.6, a NUL byte in the name argument throws a ``ValueError``.

PHP code
________
.. code-block:: php

   <?php
   
   var_dump(getenv("FOO\0BAR"));
   
   ?>

Before
______
.. code-block:: output

   bool(false)
   

After
______
.. code-block:: output

   getenv(): Argument #1 ($name) must not contain any null bytes


PHP version change
__________________
This behavior changed in 8.6


See Also
________

* `getenv() <https://www.php.net/getenv>`_


Error Messages
______________

  + `getenv(): Argument #1 ($name) must not contain any null bytes <https://php-errors.readthedocs.io/en/latest/messages/getenv%28%29%3A-argument-%231-%28%24name%29-must-not-contain-any-null-bytes.html>`_



