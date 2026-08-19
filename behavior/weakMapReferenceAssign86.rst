.. _weakmap-allows-reference-assignment-to-a-missing-key:

WeakMap Allows Reference Assignment To A Missing Key
====================================================
.. meta::
	:description:
		WeakMap Allows Reference Assignment To A Missing Key: Taking a reference to a ``WeakMap`` offset with ``=&`` used to require the key to already be present in the map, otherwise PHP threw an ``Error`` saying the object was not contained in the ``WeakMap``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: WeakMap Allows Reference Assignment To A Missing Key
	:twitter:description: WeakMap Allows Reference Assignment To A Missing Key: Taking a reference to a ``WeakMap`` offset with ``=&`` used to require the key to already be present in the map, otherwise PHP threw an ``Error`` saying the object was not contained in the ``WeakMap``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: WeakMap Allows Reference Assignment To A Missing Key
	:og:type: article
	:og:description: Taking a reference to a ``WeakMap`` offset with ``=&`` used to require the key to already be present in the map, otherwise PHP threw an ``Error`` saying the object was not contained in the ``WeakMap``
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/weakMapReferenceAssign86.html
	:og:locale: en

Taking a reference to a ``WeakMap`` offset with ``=&`` used to require the key to already be present in the map, otherwise PHP threw an ``Error`` saying the object was not contained in the ``WeakMap``. In PHP 8.6, a reference assignment on a missing key first creates the entry, exactly like ``$array[$key] =& $ref`` does for a regular array, and then binds the reference to it.

PHP code
________
.. code-block:: php

   <?php
   
   $map = new WeakMap();
   $obj = new stdClass();
   
   $ref =& $map[$obj];
   $ref = 'value via reference';
   
   var_dump($map[$obj]);
   
   ?>
   

Before
______
.. code-block:: output

   PHP Fatal error:  Uncaught Error: Object stdClass#2 not contained in WeakMap in /codes/weakMapReferenceAssign86.php:6
   Stack trace:
   #0 {main}
     thrown in /codes/weakMapReferenceAssign86.php on line 6
   
   Fatal error: Uncaught Error: Object stdClass#2 not contained in WeakMap in /codes/weakMapReferenceAssign86.php:6
   Stack trace:
   #0 {main}
     thrown in /codes/weakMapReferenceAssign86.php on line 6
   

After
______
.. code-block:: output

   string(19) "value via reference" 
   


PHP version change
__________________
This behavior changed in 8.6


See Also
________

* `WeakMap <https://www.php.net/weakmap>`_



