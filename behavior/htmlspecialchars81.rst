.. _`default-values-with-htmlspecialchars()`:

Default Values With htmlspecialchars()
======================================
.. meta::
	:description:
		Default Values With htmlspecialchars(): The default values of htmlspecialchars() were changed in PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Default Values With htmlspecialchars()
	:twitter:description: Default Values With htmlspecialchars(): The default values of htmlspecialchars() were changed in PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Default Values With htmlspecialchars()
	:og:type: article
	:og:description: The default values of htmlspecialchars() were changed in PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/htmlspecialchars81.html
	:og:locale: en

The default values of htmlspecialchars() were changed in PHP 8.1. It was ENT_COMPAT and it is now replaced with ``ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401``.



In particular, it means that ``'``, single quote, is now converted in HTML entities.



PHP code
________
.. code-block:: php

   <?php
   
   echo htmlspecialchars("'");
   
   ?>

Before
______
.. code-block:: output

   

After
______
.. code-block:: output

   


PHP version change
__________________
This behavior changed in 8.1


See Also
________

* `htmlspecialchars <https://www.php.net/htmlspecialchars>`_


Error Messages
______________

  + `0 <https://php-errors.readthedocs.io/en/latest/messages/.html>`_



