.. _`generators-don't-return`:

Generators Don't Return
=======================
.. meta::
	:description:
		Generators Don't Return: In PHP 5.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Generators Don't Return
	:twitter:description: Generators Don't Return: In PHP 5
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Generators Don't Return
	:og:type: article
	:og:description: In PHP 5
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/generatorDontReturn.html
	:og:locale: en

In PHP 5.x, generators were not allowed to have return values. This feature was added in PHP 7.0, with the ``getReturn`` method.

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

   PHP Fatal error:  Generators cannot return values using "return" 
   
   Fatal error: Generators cannot return values using "return" 
   

After
______
.. code-block:: output

   a
   


PHP version change
__________________
This behavior changed in 7.0



