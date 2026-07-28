.. _openlog()-rejects-nul-bytes-in-the-prefix:

openlog() Rejects NUL Bytes In The Prefix
=========================================
.. meta::
	:description:
		openlog() Rejects NUL Bytes In The Prefix: ``openlog()`` used to accept a syslog prefix containing a NUL byte and silently truncated it at the NUL byte.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: openlog() Rejects NUL Bytes In The Prefix
	:twitter:description: openlog() Rejects NUL Bytes In The Prefix: ``openlog()`` used to accept a syslog prefix containing a NUL byte and silently truncated it at the NUL byte
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: openlog() Rejects NUL Bytes In The Prefix
	:og:type: article
	:og:description: ``openlog()`` used to accept a syslog prefix containing a NUL byte and silently truncated it at the NUL byte
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/openlogNullByteValueError.html
	:og:locale: en

``openlog()`` used to accept a syslog prefix containing a NUL byte and silently truncated it at the NUL byte. In PHP 8.6, a NUL byte in the argument throws a ``ValueError``.

PHP code
________
.. code-block:: php

   <?php
   
   try {
       var_dump(openlog("foo\0bar", LOG_PID, LOG_USER));
   } catch (\ValueError $e) {
       echo $e->getMessage(), "\n";
   }
   
   ?>

Before
______
.. code-block:: output

   bool(true)
   

After
______
.. code-block:: output

   openlog(): Argument #1 ($prefix) must not contain any null bytes
   


PHP version change
__________________
This behavior changed in 8.6


See Also
________

* `openlog() <https://www.php.net/openlog>`_


Error Messages
______________

  + `openlog(): Argument #1 ($prefix) must not contain any null bytes <https://php-errors.readthedocs.io/en/latest/messages/openlog%28%29%3A-argument-%231-%28%24prefix%29-must-not-contain-any-null-bytes.html>`_



