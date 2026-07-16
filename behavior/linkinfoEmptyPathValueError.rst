.. _linkinfo()-rejects-an-empty-path:

linkinfo() Rejects An Empty Path
================================
.. meta::
	:description:
		linkinfo() Rejects An Empty Path: ``linkinfo()`` used to accept an empty string as its path argument, emit a warning and return ``-1``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: linkinfo() Rejects An Empty Path
	:twitter:description: linkinfo() Rejects An Empty Path: ``linkinfo()`` used to accept an empty string as its path argument, emit a warning and return ``-1``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: linkinfo() Rejects An Empty Path
	:og:type: article
	:og:description: ``linkinfo()`` used to accept an empty string as its path argument, emit a warning and return ``-1``
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/linkinfoEmptyPathValueError.html
	:og:locale: en

``linkinfo()`` used to accept an empty string as its path argument, emit a warning and return ``-1``. In PHP 8.6, an empty path throws a ``ValueError``.

PHP code
________
.. code-block:: php

   <?php
   
   var_dump(linkinfo(''));
   
   ?>

Before
______
.. code-block:: output

   PHP Warning:  linkinfo(): No such file or directory
   
   Warning: linkinfo(): No such file or directory
   int(-1)
   

After
______
.. code-block:: output

   linkinfo(): Argument #1 ($path) must not be empty


PHP version change
__________________
This behavior changed in 8.6


See Also
________

* `linkinfo() <https://www.php.net/linkinfo>`_


Error Messages
______________

  + `linkinfo(): Argument #1 ($path) must not be empty <https://php-errors.readthedocs.io/en/latest/messages/linkinfo%28%29%3A-argument-%231-%28%24path%29-must-not-be-empty.html>`_



