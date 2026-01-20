.. _`unserialize-with-the-upper-case-s-is-deprecated`:

Unserialize with the upper case S is deprecated
===============================================
.. meta::
	:description:
		Unserialize with the upper case S is deprecated: When using the unserialize() function, the string should not use ``S`` (upper case S) to format a string.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Unserialize with the upper case S is deprecated
	:twitter:description: Unserialize with the upper case S is deprecated: When using the unserialize() function, the string should not use ``S`` (upper case S) to format a string
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Unserialize with the upper case S is deprecated
	:og:type: article
	:og:description: When using the unserialize() function, the string should not use ``S`` (upper case S) to format a string
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/unserialize_S.html
	:og:locale: en

When using the unserialize() function, the string should not use ``S`` (upper case S) to format a string. It should only use ``s`` (lower case S).



Other formats, such as ``i``, ``b`` or ``N`` are already case sensitive.

PHP code
________
.. code-block:: php

   <?php
   
   var_dump(unserialize('S:1:e;'));
   
   ?>

Before
______
.. code-block:: output

   string(1) e
   

After
______
.. code-block:: output

   PHP Deprecated:  unserialize(): Unserializing the 'S' format is deprecated
   
   Deprecated: unserialize(): Unserializing the 'S' format is deprecated
   string(1) e
   


PHP version change
__________________
This behavior changed in 8.4


Error Messages
______________

  + `Unserializing the 'S' format is deprecated <https://php-errors.readthedocs.io/en/latest/messages/unserializing-the-%27s%27-format-is-deprecated.html>`_



