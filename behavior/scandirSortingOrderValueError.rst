.. _scandir()-validates-its-sorting-order-argument:

scandir() Validates Its Sorting Order Argument
==============================================
.. meta::
	:description:
		scandir() Validates Its Sorting Order Argument: ``scandir()`` accepts a second argument that selects the sort order of the returned entries: ``SCANDIR_SORT_ASCENDING``, ``SCANDIR_SORT_DESCENDING``, or ``SCANDIR_SORT_NONE``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: scandir() Validates Its Sorting Order Argument
	:twitter:description: scandir() Validates Its Sorting Order Argument: ``scandir()`` accepts a second argument that selects the sort order of the returned entries: ``SCANDIR_SORT_ASCENDING``, ``SCANDIR_SORT_DESCENDING``, or ``SCANDIR_SORT_NONE``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: scandir() Validates Its Sorting Order Argument
	:og:type: article
	:og:description: ``scandir()`` accepts a second argument that selects the sort order of the returned entries: ``SCANDIR_SORT_ASCENDING``, ``SCANDIR_SORT_DESCENDING``, or ``SCANDIR_SORT_NONE``
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/scandirSortingOrderValueError.html
	:og:locale: en

``scandir()`` accepts a second argument that selects the sort order of the returned entries: ``SCANDIR_SORT_ASCENDING``, ``SCANDIR_SORT_DESCENDING``, or ``SCANDIR_SORT_NONE``. Until PHP 8.6, any other value was silently accepted and treated as descending order. In PHP 8.6, an invalid sorting order throws a ``ValueError``.

PHP code
________
.. code-block:: php

   <?php
   
   $dir = sys_get_temp_dir() . '/scandir_86_test';
   @mkdir($dir);
   touch($dir . '/a.txt');
   touch($dir . '/b.txt');
   
   try {
       var_dump(scandir($dir, 99));
   } catch (\ValueError $e) {
       echo $e->getMessage(), "\n";
   }
   
   ?>

Before
______
.. code-block:: output

   array(4) {
     [0]=>
     string(5) b.txt
     [1]=>
     string(5) a.txt
     [2]=>
     string(2) ..
     [3]=>
     string(1) .
   }
   

After
______
.. code-block:: output

   scandir(): Argument #2 ($sorting_order) must be one of the SCANDIR_SORT_ASCENDING, SCANDIR_SORT_DESCENDING, or SCANDIR_SORT_NONE constants
   


PHP version change
__________________
This behavior changed in 8.6


See Also
________

* `scandir() <https://www.php.net/scandir>`_


Error Messages
______________

  + `scandir(): Argument #2 ($sorting_order) must be one of the SCANDIR_SORT_ASCENDING, SCANDIR_SORT_DESCENDING, or SCANDIR_SORT_NONE constants <https://php-errors.readthedocs.io/en/latest/messages/scandir%28%29%3A-argument-%232-%28%24sorting_order%29-must-be-one-of-the-scandir_sort_ascending%2C-scandir_sort_descending%2C-or-scandir_sort_none-constants.html>`_



