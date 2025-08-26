.. _`switch()-changed-comparison-style`:

switch() Changed Comparison Style
=================================
.. meta::
	:description:
		switch() Changed Comparison Style: The switch command uses a relaxed comparison style.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: switch() Changed Comparison Style
	:twitter:description: switch() Changed Comparison Style: The switch command uses a relaxed comparison style
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: switch() Changed Comparison Style
	:og:type: article
	:og:description: The switch command uses a relaxed comparison style
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/switchComparison.html
	:og:locale: en

The switch command uses a relaxed comparison style. Hence, the associated cases changed in PHP 8.0, whenever they use the special values such a 0, empty string '' or null.

PHP code
________
.. code-block:: php

   <?php
   
   $a = 0;
   switch ($a) {
       case 'a': 
           print 'a'.PHP_EOL;
           break;
   
       case 0: 
           print 'Null'.PHP_EOL;
           break;
           
       default:
           print 'Default'.PHP_EOL;
   }
   
   ?>

Before
______
.. code-block:: output

   a

After
______
.. code-block:: output

   Null


PHP version change
__________________
This behavior changed in 8.0


Error Messages
______________

  + `0 <https://php-errors.readthedocs.io/en/latest/messages/.html>`_



