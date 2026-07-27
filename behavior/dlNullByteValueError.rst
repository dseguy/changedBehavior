.. _dl()-rejects-nul-bytes-in-the-extension-filename:

dl() Rejects NUL Bytes In The Extension Filename
================================================
.. meta::
	:description:
		dl() Rejects NUL Bytes In The Extension Filename: ``dl()`` used to accept an extension filename containing a NUL byte and only reported the standard warning once ``enable_dl`` turned out to be off.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: dl() Rejects NUL Bytes In The Extension Filename
	:twitter:description: dl() Rejects NUL Bytes In The Extension Filename: ``dl()`` used to accept an extension filename containing a NUL byte and only reported the standard warning once ``enable_dl`` turned out to be off
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: dl() Rejects NUL Bytes In The Extension Filename
	:og:type: article
	:og:description: ``dl()`` used to accept an extension filename containing a NUL byte and only reported the standard warning once ``enable_dl`` turned out to be off
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/dlNullByteValueError.html
	:og:locale: en

``dl()`` used to accept an extension filename containing a NUL byte and only reported the standard warning once ``enable_dl`` turned out to be off. In PHP 8.6, a NUL byte in the argument throws a ``ValueError`` before that check is even reached.

PHP code
________
.. code-block:: php

   <?php
   
   try {
       var_dump(dl("foo\0bar"));
   } catch (\ValueError $e) {
       echo $e->getMessage(), "\n";
   }
   
   ?>

Before
______
.. code-block:: output

   PHP Warning:  dl(): Dynamically loaded extensions aren't enabled in /codes/dlNullByteValueError.php on line 4
   
   Warning: dl(): Dynamically loaded extensions aren't enabled in /codes/dlNullByteValueError.php on line 4
   bool(false)
   

After
______
.. code-block:: output

   dl(): Argument #1 ($extension_filename) must not contain any null bytes
   


PHP version change
__________________
This behavior changed in 8.6


See Also
________

* `dl() <https://www.php.net/dl>`_


Error Messages
______________

  + `dl(): Argument #1 ($extension_filename) must not contain any null bytes <https://php-errors.readthedocs.io/en/latest/messages/dl%28%29%3A-argument-%231-%28%24extension_filename%29-must-not-contain-any-null-bytes.html>`_



