.. _`(unset)-was-removed`:

(unset) Was Removed
===================
.. meta::
	:description:
		(unset) Was Removed: (unset) operator is removed.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: (unset) Was Removed
	:twitter:description: (unset) Was Removed: (unset) operator is removed
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: (unset) Was Removed
	:og:type: article
	:og:description: (unset) operator is removed
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/unset_cast.html
	:og:locale: en

(unset) operator is removed. Use the unset() function for that feature.

PHP code
________
.. code-block:: php

   <?php
   
   $a = 1;
   (unset) $a;
   
   var_dump($a);
   
   ?>

Before
______
.. code-block:: output

   PHP Deprecated:  The (unset) cast is deprecated
   
   Deprecated: The (unset) cast is deprecated
   int(1)
   

After
______
.. code-block:: output

   PHP Fatal error:  The (unset) cast is no longer supported
   
   Fatal error: The (unset) cast is no longer supported
   


PHP version change
__________________
This behavior was deprecated in 7.4

This behavior changed in 8.0


Error Messages
______________

  + `The (unset) cast is deprecated <https://php-errors.readthedocs.io/en/latest/messages/the-%28unset%29-cast-is-deprecated.html>`_



