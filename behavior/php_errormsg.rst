.. _`$php_errormsg-has-been-removed`:

$php_errormsg has been removed
==============================
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

  + `Undefined variable $php_errormsg <https://php-errors.readthedocs.io/en/latest/messages/Undefined+variable+%24php_errormsg.html>`_



