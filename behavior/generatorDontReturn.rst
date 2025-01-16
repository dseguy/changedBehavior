.. _`generators-dont-return`:

Generators Dont Return
======================
.. meta::
	:description:
		Generators Dont Return: In PHP 5.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Generators Dont Return
	:twitter:description: Generators Dont Return: In PHP 5
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Generators Dont Return
	:og:type: article
	:og:description: In PHP 5
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/generatorDontReturn.html
	:og:locale: en

In PHP 5.x, geneatores were not allowed to have return values. It was added in PHP 7.0.

PHP code
________
.. code-block:: php

   <?php
   
   function foo() {
       yield 'a';
       
       return 2;
   }
   
   foreach(foo() as $a) {
       print $a.PHP_EOL;
   }
   
   ?>

Before
______
.. code-block:: output

   PHP Fatal error:  Generators cannot return values using "return" in /codes/generatorDontReturn.php on line 6
   
   Fatal error: Generators cannot return values using "return" in /codes/generatorDontReturn.php on line 6
   

After
______
.. code-block:: output

   a
   


PHP version change
__________________
This behavior changed in 7.0


