.. _array_intersect()-converts-values-while-scanning-inputs:

array_intersect() Converts Values While Scanning Inputs
=======================================================
.. meta::
	:description:
		array_intersect() Converts Values While Scanning Inputs: ``array_intersect()`` compares values as strings.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: array_intersect() Converts Values While Scanning Inputs
	:twitter:description: array_intersect() Converts Values While Scanning Inputs: ``array_intersect()`` compares values as strings
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: array_intersect() Converts Values While Scanning Inputs
	:og:type: article
	:og:description: ``array_intersect()`` compares values as strings
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/arrayIntersectConversionTiming86.html
	:og:locale: en

``array_intersect()`` compares values as strings. Until PHP 8.6, non-string values were converted to strings lazily, during the pairwise sort-based comparisons used internally. In PHP 8.6, all input arrays (once at least two are known to be non-empty) are scanned upfront and their values converted to strings before any comparison happens. This changes the number and order of conversion warnings and ``__toString()`` calls -- fewer calls overall, since each value is now converted once instead of possibly several times during comparisons -- and can change results for a stateful ``__toString()`` implementation.

PHP code
________
.. code-block:: php

   <?php
   
   class Stateful {
       private static $calls = 0;
       public function __toString(): string {
           self::$calls++;
           echo "toString call #".self::$calls."\n";
           return 'x';
       }
   }
   
   $a = [new Stateful()];
   $b = ['x'];
   $c = ['x'];
   
   $result = array_intersect($a, $b, $c);
   var_dump(count($result));
   
   ?>
   

Before
______
.. code-block:: output

   toString call #1
   toString call #2
   int(1)
   

After
______
.. code-block:: output

   toString call #1
   int(1)
   


PHP version change
__________________
This behavior changed in 8.6


See Also
________

* `array_intersect() <https://www.php.net/array_intersect>`_



