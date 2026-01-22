.. _recursive-comparison-of-arrays:

Recursive Comparison Of Arrays
==============================
.. meta::
	:description:
		Recursive Comparison Of Arrays: Until PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Recursive Comparison Of Arrays
	:twitter:description: Recursive Comparison Of Arrays: Until PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Recursive Comparison Of Arrays
	:og:type: article
	:og:description: Until PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/recursiveComparison.html
	:og:locale: en

Until PHP 8.4, recursive arrays should not be compared one another, as the engine might ends in an infinite loop.



In PHP 8.4, it is now a catchable Error.



PHP code
________
.. code-block:: php

   <?php
   
   $array = [1,2,3, &$array];
   $array2 = [1,2,3, &$array2];
   
   var_dump($array == $array2);
   
   ?>

Before
______
.. code-block:: output

   PHP Fatal error:  Nesting level too deep - recursive dependency?
   
   Fatal error: Nesting level too deep - recursive dependency?
   

After
______
.. code-block:: output

   PHP Fatal error:  Uncaught Error: Nesting level too deep - recursive dependency? 
   
   Fatal error: Uncaught Error: Nesting level too deep - recursive dependency? 
   


PHP version change
__________________
This behavior changed in 8.4


Error Messages
______________

  + `Nesting level too deep - recursive dependency?  <https://php-errors.readthedocs.io/en/latest/messages/nesting-level-too-deep---recursive-dependency%3F.html>`_



