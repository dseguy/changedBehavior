.. _`splfixedarray-is-now-an-iteratoraggregate`:

SplFixedArray Is Now An IteratorAggregate
=========================================
.. meta::
	:description:
		SplFixedArray Is Now An IteratorAggregate: SplFixedArray used to be a Iterator, and is now a IteratorAggregate.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: SplFixedArray Is Now An IteratorAggregate
	:twitter:description: SplFixedArray Is Now An IteratorAggregate: SplFixedArray used to be a Iterator, and is now a IteratorAggregate
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: SplFixedArray Is Now An IteratorAggregate
	:og:type: article
	:og:description: SplFixedArray used to be a Iterator, and is now a IteratorAggregate
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/splfixedarray.html
	:og:locale: en

SplFixedArray used to be a Iterator, and is now a IteratorAggregate. 



They don't have identical behaviors. They're both iterable but they go about it two completely different ways: Iterator means the object modifies itself during iteration, and IteratorAggregater means the object remains unchanged because it uses a proxy object to handle iteration.



Note that is it not possible to extends both at the same time: they are incompatible. 



PHP code
________
.. code-block:: php

   <?php
   $array = new SplFixedArray(5);
   
   var_dump($array instanceof Iterator);
   var_dump($array instanceof IteratorAggregate);
   
   ?>

Before
______
.. code-block:: output

   bool(true)
   bool(false)

After
______
.. code-block:: output

   bool(false)
   bool(true)
   


PHP version change
__________________
This behavior changed in 8.0


See Also
________

* `Standard PHP Library (SPL) <https://www.php.net/manual/en/migration80.incompatible.php#migration80.incompatible.spl>`_
* `Classes extending IteratorAggregate can not implement RecursiveIterator <https://github.com/php/php-src/issues/8156>`_
* `Introduction to Iterators and Generators in PHP <https://www.entropywins.wtf/blog/2017/10/16/introduction-to-iterators-and-generators-in-php/>`_
* `IteratorAggregate <https://www.php.net/manual/en/class.iteratoraggregate.php>`_
* `Iterator <https://www.php.net/manual/en/class.iterator.php>`_


Error Messages
______________

  + `0 <https://php-errors.readthedocs.io/en/latest/messages/.html>`_



