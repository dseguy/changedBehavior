.. _`fputcsv()-needs-escape-parameter`:

fputcsv() Needs Escape Parameter
================================
.. meta::
	:description:
		fputcsv() Needs Escape Parameter: fputcsv() .
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: fputcsv() Needs Escape Parameter
	:twitter:description: fputcsv() Needs Escape Parameter: fputcsv() 
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: fputcsv() Needs Escape Parameter
	:og:type: article
	:og:description: fputcsv() 
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/fputcsvEscape.html
	:og:locale: en

fputcsv() 

PHP code
________
.. code-block:: php

   <?php
   
   $fp = fopen(':memory:', 'w');
   var_dump(fputcsv($fp, [1,2,3]));
   
   ?>

Before
______
.. code-block:: output

   int(6)
   

After
______
.. code-block:: output

   PHP Deprecated:  fputcsv(): the $escape parameter must be provided as its default value will chang
   
   Deprecated: fputcsv(): the $escape parameter must be provided as its default value will change
   int(6)
   


PHP version change
__________________
This behavior was deprecated in 8.4

This behavior changed in 8.4


See Also
________

* `PHP RFC: Kill proprietary CSV escaping mechanism <https://wiki.php.net/rfc/kill-csv-escaping>`_
* `PHP 8.4: CSV: The $escape parameter must be provided <https://php.watch/versions/8.4/csv-functions-escape-parameter>`_


Analyzer
_________

  + `Php/FputcsvNeedsEscape <https://exakat.readthedocs.io/en/latest/Reference/Rules/Php/FputcsvNeedsEscape.html>`_



