.. _`count()-must-count-countable`:

count() Must Count Countable
============================
.. meta::
	:description:
		count() Must Count Countable: PHP used to count any kind of value.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: count() Must Count Countable
	:twitter:description: count() Must Count Countable: PHP used to count any kind of value
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: count() Must Count Countable
	:og:type: article
	:og:description: PHP used to count any kind of value
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/countUncountable.html
	:og:locale: en

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
   


PHP version change
__________________
This behavior was deprecated in 7.2

This behavior changed in 8.0


Error Messages
______________

  + `0 <https://php-errors.readthedocs.io/en/latest/messages/.html>`_



