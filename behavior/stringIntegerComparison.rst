.. _`string-to-integer-comparison`:

String To Integer Comparison
============================
The comparison between a string and an integer has changed. In particular, PHP 7 used to convert both operands to integer before comparison, leading to 0 and any string being equal. 



In PHP 8.0 and more recent, this doesn't happen and strings are now different from integers. 



Also, strings used to be smaller than 0, but they are now bigger.

PHP code
________
.. code-block:: php

   <?php
   
   var_dump(0 == 'a');
   
   ?>
   

Before
______
.. code-block:: output

   bool(true)
   

After
______
.. code-block:: output

   bool(false)
   


PHP version change: 8.0

See Also
________

* `String to Number Comparison <https://www.php.net/manual/en/migration80.incompatible.php#migration80.incompatible.core.string-number-comparision>`_


