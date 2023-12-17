.. _`count()-must-count-countable`:

count() Must Count Countable
============================
PHP used to count any kind of value. Most values would then be counted as one. This is not possible anymore in PHP 8.0. It requires an array or a ``countable`` object. This can be tested with ``is_countable``.

PHP code
________
.. code-block:: php

   <?php
   
   print count(3);
   
   ?>

Before
______
.. code-block:: output

   PHP Warning:  count(): Parameter must be an array or an object that implements Countable in /codes/countUncountable.php on line 3
   
   Warning: count(): Parameter must be an array or an object that implements Countable in /codes/countUncountable.php on line 3
   1

After
______
.. code-block:: output

   PHP Fatal error:  Uncaught TypeError: count(): Argument #1 ($value) must be of type Countable|array, int given in /codes/countUncountable.php:3
   Stack trace:
   #0 {main}
     thrown in /codes/countUncountable.php on line 3
   
   Fatal error: Uncaught TypeError: count(): Argument #1 ($value) must be of type Countable|array, int given in /codes/countUncountable.php:3
   Stack trace:
   #0 {main}
     thrown in /codes/countUncountable.php on line 3
   


PHP version change: 8.0

