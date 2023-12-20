.. _`strpos()-does-not-accept-null-as-second-parameter`:

strpos() Does Not Accept Null As Second Parameter
=================================================
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


