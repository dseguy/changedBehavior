.. _`named-parameters-and-variadic`:

Named Parameters And Variadic
=============================
.. meta::
	:description:
		Named Parameters And Variadic: It is possible to use the three dots ``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Named Parameters And Variadic
	:twitter:description: Named Parameters And Variadic: It is possible to use the three dots ``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Named Parameters And Variadic
	:og:type: article
	:og:description: It is possible to use the three dots ``
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/named_parameters_and_variadic.html
	:og:locale: en

It is possible to use the three dots ``...`` operator and named parameters when calling a method. The unpacked array must have named arguments, and so does the arguments after it.



In PHP 8.0, it was not possible.

PHP code
________
.. code-block:: php

   <?php
   
   function foo($a, ...$b) {
       echo $a.' '.implode(', ', $b);
   }
   
   foo(...[b => 1], a: 2);
   
   ?>

Before
______
.. code-block:: output

   PHP Fatal error:  Cannot combine named arguments and argument unpacking in /codes/named_parameters_and_variadic.php on line 7
   
   Fatal error: Cannot combine named arguments and argument unpacking in /codes/named_parameters_and_variadic.php on line 7
   

After
______
.. code-block:: output

   2 1


PHP version change
__________________
This behavior changed in 8.1



