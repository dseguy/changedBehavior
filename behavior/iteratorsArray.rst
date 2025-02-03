.. _`iterator_count()-also-count-arrays`:

iterator_count() Also Count Arrays
==================================
.. meta::
	:description:
		iterator_count() Also Count Arrays: The PHP native function used to accept only iterators.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: iterator_count() Also Count Arrays
	:twitter:description: iterator_count() Also Count Arrays: The PHP native function used to accept only iterators
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: iterator_count() Also Count Arrays
	:og:type: article
	:og:description: The PHP native function used to accept only iterators
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/iteratorsArray.html
	:og:locale: en

The PHP native function used to accept only iterators. Since PHP 8.1, arrays are also welcomed. 

PHP code
________
.. code-block:: php

   <?php
   
   print iterator_count([1,2,3]);
   
   ?>

Before
______
.. code-block:: output

   Uncaught TypeError: iterator_count(): Argument #1 ($iterator) must be of type Traversable, array given

After
______
.. code-block:: output

   3


PHP version change
__________________
This behavior changed in 8.2


Error Messages
______________

  + `Uncaught TypeError: iterator_count(): Argument #1 ($iterator) must be of type Traversable, array given <https://php-errors.readthedocs.io/en/latest/messages/must-be-of-type-%25s%2C-%25s-given.html>`_



