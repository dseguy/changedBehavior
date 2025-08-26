.. _`strftime()-and-gmstrftime()-are-deprecated`:

strftime() And gmstrftime() Are Deprecated
==========================================
.. meta::
	:description:
		strftime() And gmstrftime() Are Deprecated: strftime() and gmstrftime() format time and date according to locale settings.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: strftime() And gmstrftime() Are Deprecated
	:twitter:description: strftime() And gmstrftime() Are Deprecated: strftime() and gmstrftime() format time and date according to locale settings
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: strftime() And gmstrftime() Are Deprecated
	:og:type: article
	:og:description: strftime() and gmstrftime() format time and date according to locale settings
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/strftime.html
	:og:locale: en

strftime() and gmstrftime() format time and date according to locale settings. These functions are deprecated in PHP 8.1, and should be replaced with date() and gmtdate(), respectively, or with gmdate() or with IntlDateFormatter::format() (both of them, with the right format).

PHP code
________
.. code-block:: php

   <?php
   
   echo strftime(1);
   echo gmstrftime(2);
   
   ?>

Before
______
.. code-block:: output

   12

After
______
.. code-block:: output

   PHP Deprecated:  Function strftime() is deprecated since 8.1, use IntlDateFormatter::format() instead in /codes/strftime.php on line 3
   
   Deprecated: Function strftime() is deprecated since 8.1, use IntlDateFormatter::format() instead in /codes/strftime.php on line 3
   1PHP Deprecated:  Function gmstrftime() is deprecated since 8.1, use IntlDateFormatter::format() instead in /codes/strftime.php on line 4
   
   Deprecated: Function gmstrftime() is deprecated since 8.1, use IntlDateFormatter::format() instead in /codes/strftime.php on line 4
   2


PHP version change
__________________
This behavior changed in 8.4


See Also
________

* `PHP: Fixing Deprecated strftime() calls <https://whateverthing.com/blog/2022/12/05/php-fixing-deprecated-strftime-calls/>`_


Error Messages
______________

  + `0 <https://php-errors.readthedocs.io/en/latest/messages/.html>`_



