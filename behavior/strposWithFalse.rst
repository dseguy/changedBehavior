.. _`strpos()-does-not-accept-false`:

strpos() Does Not Accept False
==============================
PHP used to type cast ``false`` to 0 then to a string, when it is used as second argument to strpos(). 

PHP code
________
.. code-block:: php

   <?php
   
   var_dump(strpos('abc', false));
   var_dump(strpos('a'.chr(0), false));
   ?>

Before
______
.. code-block:: output

   PHP Deprecated:  strpos(): Non-string needles will be interpreted as strings in the future. Use an explicit chr() call to preserve the current behavior in /codes/strposWithFalse.php on line 3
   
   Deprecated: strpos(): Non-string needles will be interpreted as strings in the future. Use an explicit chr() call to preserve the current behavior in /codes/strposWithFalse.php on line 3
   bool(false)
   int(1);
   

After
______
.. code-block:: output

   int(0)
   int(0)
   


PHP version change
__________________
This behavior was deprecated in 7.4

This behavior changed in 8.0


See Also
________

* `strpos <https://www.php.net/manual/en/function.strpos.php>`_


Error Messages
______________

  + `Non-string needles will be interpreted as strings in the future. Use an explicit chr() call to preserve the current behavior  <https://php-errors.readthedocs.io/en/latest/messages/Non-string+needles+will+be+interpreted+as+strings+in+the+future.+Use+an+explicit+chr%28%29+call+to+preserve+the+current+behavior+.html>`_



