.. _`(real)-is-replaced-by-(float)`:

(real) Is Replaced By (float)
=============================
.. meta::
	:description:
		(real) Is Replaced By (float): (real) is replaced by (float) in PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: (real) Is Replaced By (float)
	:twitter:description: (real) Is Replaced By (float): (real) is replaced by (float) in PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: (real) Is Replaced By (float)
	:og:type: article
	:og:description: (real) is replaced by (float) in PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/real_cast.html
	:og:locale: en

(real) is replaced by (float) in PHP 8. It used to be a synonym of (float), and there is only one left. 

PHP code
________
.. code-block:: php

   <?php
   
   print (real) 1;
   
   
   ?>

Before
______
.. code-block:: output

   PHP Deprecated:  The (real) cast is deprecated, use (float) instead in /codes/real_cast.php on line 3
   
   Deprecated: The (real) cast is deprecated, use (float) instead in /codes/real_cast.php on line 3
   1

After
______
.. code-block:: output

   PHP Parse error:  The (real) cast has been removed, use (float) instead in /codes/real_cast.php on line 3
   
   Parse error: The (real) cast has been removed, use (float) instead in /codes/real_cast.php on line 3
   


PHP version change
__________________
This behavior changed in 8.0



