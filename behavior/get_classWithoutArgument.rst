.. _`get_class()-needs-an-argument`:

get_class() Needs An Argument
=============================
.. meta::
	:description:
		get_class() Needs An Argument: get_class() had a default behavior, where the current class would be returned when get_class() is called without argumnts.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: get_class() Needs An Argument
	:twitter:description: get_class() Needs An Argument: get_class() had a default behavior, where the current class would be returned when get_class() is called without argumnts
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: get_class() Needs An Argument
	:og:type: article
	:og:description: get_class() had a default behavior, where the current class would be returned when get_class() is called without argumnts
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/get_classWithoutArgument.html
	:og:locale: en

get_class() had a default behavior, where the current class would be returned when get_class() is called without argumnts. This is now deprecated.



It is also deprecated for get_parent_class(). 

PHP code
________
.. code-block:: php

   <?php
   
   class x {
           function foo() {
                   echo get_class();
                   echo get_parent_class();
           }
   }
   
   (new x)->foo();
   
   ?>

Before
______
.. code-block:: output

   x

After
______
.. code-block:: output

   Calling get_class() without arguments is deprecated


PHP version change
__________________
This behavior was deprecated in 8.3

This behavior changed in 9.0


Analyzer
_________

  + `Structures/NoGetClassNull <https://exakat.readthedocs.io/en/latest/Reference/Rules/Structures/NoGetClassNull.html>`_



