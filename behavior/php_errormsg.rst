.. _`$php_errormsg-has-been-removed`:

$php_errormsg has been removed
==============================
.. meta::
	:description:
		$php_errormsg has been removed: $php_errormsg used to hold the message of the last error that PHP emitted.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: $php_errormsg has been removed
	:twitter:description: $php_errormsg has been removed: $php_errormsg used to hold the message of the last error that PHP emitted
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: $php_errormsg has been removed
	:og:type: article
	:og:description: $php_errormsg used to hold the message of the last error that PHP emitted
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/php_errormsg.html
	:og:locale: en

$php_errormsg used to hold the message of the last error that PHP emitted. This is a feature handled by the error_get_last() function. 



$php_errormsg was only set if the ``tracks_error`` directive was activated (by default, it was not).

PHP code
________
.. code-block:: php

   <?php
   
   ini_set('track_errors', 1);
   
   echo $a;
   
   echo $php_errormsg;
   

Before
______
.. code-block:: output

   PHP Notice:  Undefined variable: a in /codes/php_errormsg.php on line 5
   
   Notice: Undefined variable: a in /codes/php_errormsg.php on line 5
   Undefined variable: a

After
______
.. code-block:: output

   PHP Warning:  Undefined variable $a in /codes/php_errormsg.php on line 5
   
   Warning: Undefined variable $a in /codes/php_errormsg.php on line 5
   PHP Warning:  Undefined variable $php_errormsg in /codes/php_errormsg.php on line 7
   
   Warning: Undefined variable $php_errormsg in /codes/php_errormsg.php on line 7
   


PHP version change
__________________
This behavior was deprecated in 7.2

This behavior changed in 8.0


See Also
________

* `$php_errormsg <https://www.php.net/manual/en/reserved.variables.phperrormsg.php>`_


Error Messages
______________

  + `Undefined variable <https://php-errors.readthedocs.io/en/latest/messages/undefined-variable.html>`_



