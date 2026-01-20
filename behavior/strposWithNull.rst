.. _`strpos()-does-not-accept-null-as-second-parameter`:

strpos() Does Not Accept Null As Second Parameter
=================================================
.. meta::
	:description:
		strpos() Does Not Accept Null As Second Parameter: strpos() and stripos() used to accept NULL as second argument.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: strpos() Does Not Accept Null As Second Parameter
	:twitter:description: strpos() Does Not Accept Null As Second Parameter: strpos() and stripos() used to accept NULL as second argument
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: strpos() Does Not Accept Null As Second Parameter
	:og:type: article
	:og:description: strpos() and stripos() used to accept NULL as second argument
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/strposWithNull.html
	:og:locale: en

strpos() and stripos() used to accept NULL as second argument. This was deprecated with a warning, and then removed in PHP 8.

PHP code
________
.. code-block:: php

   <?php
   
   var_dump(strpos('1', null));
   
   ?>

Before
______
.. code-block:: output

   strpos(): Non-string needles will be interpreted as strings in the future. Use an explicit chr() call to preserve the current behavior

After
______
.. code-block:: output

   strpos(): Passing null to parameter #2 ($needle) of type string is deprecated


PHP version change
__________________
This behavior was deprecated in 7.3

This behavior changed in 8.0


Error Messages
______________

  + `Passing null to parameter #2 ($needle) of type string is deprecated <https://php-errors.readthedocs.io/en/latest/messages/strlen%28%29%3A-passing-null-to-parameter-%231-%28%24string%29-of-type-string-is-deprecated.html>`_



