.. _`ksort()-now-uses-regular-comparison`:

ksort() now uses regular comparison
===================================
.. meta::
	:description:
		ksort() now uses regular comparison: Until PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: ksort() now uses regular comparison
	:twitter:description: ksort() now uses regular comparison: Until PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: ksort() now uses regular comparison
	:og:type: article
	:og:description: Until PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/ksort-regular.html
	:og:locale: en

Until PHP 8.2, ksort() used a different sorting method to sort the keys. Since, PHP 8.2, it uses the same method than sort(). This means some values may have a different position.



This applies to krsort() too. It may apply to uksort(), depending on the code of the custom comparison function.

PHP code
________
.. code-block:: php

   <?php
   
   $array = [ 0, '-f' => 1, 'f' => 2];
   
   ksort($array);
   
   print_r($array);
   
   ?>

Before
______
.. code-block:: output

   Array
   (
       [0] => 0
       [-f] => 1
       [f] => 2
   )
   

After
______
.. code-block:: output

   Array
   (
       [-f] => 1
       [0] => 0
       [f] => 2
   )
   


PHP version change
__________________
This behavior changed in 8.2


