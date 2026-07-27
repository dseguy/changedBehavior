.. _putenv()-rejects-nul-bytes-in-the-assignment:

putenv() Rejects NUL Bytes In The Assignment
============================================
.. meta::
	:description:
		putenv() Rejects NUL Bytes In The Assignment: ``putenv()`` used to accept an assignment string containing a NUL byte and silently truncated it at the NUL byte, setting an environment variable from the part before it.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: putenv() Rejects NUL Bytes In The Assignment
	:twitter:description: putenv() Rejects NUL Bytes In The Assignment: ``putenv()`` used to accept an assignment string containing a NUL byte and silently truncated it at the NUL byte, setting an environment variable from the part before it
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: putenv() Rejects NUL Bytes In The Assignment
	:og:type: article
	:og:description: ``putenv()`` used to accept an assignment string containing a NUL byte and silently truncated it at the NUL byte, setting an environment variable from the part before it
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/putenvNullByteValueError.html
	:og:locale: en

``putenv()`` used to accept an assignment string containing a NUL byte and silently truncated it at the NUL byte, setting an environment variable from the part before it. In PHP 8.6, a NUL byte in the argument throws a ``ValueError``.

PHP code
________
.. code-block:: php

   <?php
   
   try {
       var_dump(putenv("FOO\0BAR=1"));
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

   putenv(): Argument #1 ($assignment) must not contain any null bytes
   


PHP version change
__________________
This behavior changed in 8.6


See Also
________

* `putenv() <https://www.php.net/putenv>`_


Error Messages
______________

  + `putenv(): Argument #1 ($assignment) must not contain any null bytes <https://php-errors.readthedocs.io/en/latest/messages/putenv%28%29%3A-argument-%231-%28%24assignment%29-must-not-contain-any-null-bytes.html>`_



