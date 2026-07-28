.. _proc_open()-rejects-nul-bytes-in-the-working-directory:

proc_open() Rejects NUL Bytes In The Working Directory
======================================================
.. meta::
	:description:
		proc_open() Rejects NUL Bytes In The Working Directory: ``proc_open()`` used to accept a ``$cwd`` argument containing a NUL byte and passed the truncated path straight to the operating system, which then failed to spawn the process.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: proc_open() Rejects NUL Bytes In The Working Directory
	:twitter:description: proc_open() Rejects NUL Bytes In The Working Directory: ``proc_open()`` used to accept a ``$cwd`` argument containing a NUL byte and passed the truncated path straight to the operating system, which then failed to spawn the process
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: proc_open() Rejects NUL Bytes In The Working Directory
	:og:type: article
	:og:description: ``proc_open()`` used to accept a ``$cwd`` argument containing a NUL byte and passed the truncated path straight to the operating system, which then failed to spawn the process
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/procOpenCwdNullByteValueError.html
	:og:locale: en

``proc_open()`` used to accept a ``$cwd`` argument containing a NUL byte and passed the truncated path straight to the operating system, which then failed to spawn the process. In PHP 8.6, a NUL byte in ``$cwd`` throws a ``ValueError`` before attempting to start the process.

PHP code
________
.. code-block:: php

   <?php
   
   try {
       var_dump(proc_open('echo hi', [], $pipes, "foo\0bar"));
   } catch (\ValueError $e) {
       echo $e->getMessage(), "\n";
   }
   
   ?>

Before
______
.. code-block:: output

   PHP Warning:  proc_open(): posix_spawn() failed: No such file or directory in /codes/procOpenCwdNullByteValueError.php on line 4
   
   Warning: proc_open(): posix_spawn() failed: No such file or directory in /codes/procOpenCwdNullByteValueError.php on line 4
   bool(false)
   

After
______
.. code-block:: output

   proc_open(): Argument #4 ($cwd) must not contain any null bytes
   


PHP version change
__________________
This behavior changed in 8.6


See Also
________

* `proc_open() <https://www.php.net/proc_open>`_


Error Messages
______________

  + `proc_open(): Argument #4 ($cwd) must not contain any null bytes <https://php-errors.readthedocs.io/en/latest/messages/proc_open%28%29%3A-argument-%234-%28%24cwd%29-must-not-contain-any-null-bytes.html>`_



