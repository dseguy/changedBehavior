.. _`no-more-dir()-with-null`:

No More dir() With Null
=======================
.. meta::
	:description:
		No More dir() With Null: When calling ``dir()`` with ``null`` as parameter, it defaulted to open again the last opened directory.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: No More dir() With Null
	:twitter:description: No More dir() With Null: When calling ``dir()`` with ``null`` as parameter, it defaulted to open again the last opened directory
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: No More dir() With Null
	:og:type: article
	:og:description: When calling ``dir()`` with ``null`` as parameter, it defaulted to open again the last opened directory
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/dirWithNull.html
	:og:locale: en

When calling ``dir()`` with ``null`` as parameter, it defaulted to open again the last opened directory. Since PHP 8.1, this is not possible anymore.

PHP code
________
.. code-block:: php

   <?php
   
   $a = dir('/tmp');
   
   $b = dir(null);
   
   var_dump($b);
   
   ?>

Before
______
.. code-block:: output

   bool(false)
   

After
______
.. code-block:: output

   PHP Deprecated:  dir(): Passing null to parameter #1 ($directory) of type string is deprecated
   
   Deprecated: dir(): Passing null to parameter #1 ($directory) of type string is deprecated
   bool(false)
   


PHP version change
__________________
This behavior changed in 8.1


Error Messages
______________

  + `Passing null to parameter #1 ($directory) of type string is deprecated <https://php-errors.readthedocs.io/en/latest/messages/passing-null-is-deprecated%2C-instead-the-last-opened-directory-stream-should-be-provided.html>`_



