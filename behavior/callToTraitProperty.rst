.. _`accessing-directly-properties-in-trait`:

Accessing Directly Properties In Trait
======================================
.. meta::
	:description:
		Accessing Directly Properties In Trait: Until PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Accessing Directly Properties In Trait
	:twitter:description: Accessing Directly Properties In Trait: Until PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Accessing Directly Properties In Trait
	:og:type: article
	:og:description: Until PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/callToTraitProperty.html
	:og:locale: en

Until PHP 8.1, it was possible, though deprecated, to manipulate directly trait properties: the static properties. 



Since trait only make sense as a part of a class, this operation is now forbidden.



Accessing static methods are also forbidden. Accessing trait constants is also forbidden, although constants in traits were introduced in PHP 8.3. 



PHP code
________
.. code-block:: php

   <?php
   
   trait t {
       public static $P = 1;
       
   }
   
   echo T::$P;
   

Before
______
.. code-block:: output

   1

After
______
.. code-block:: output

   PHP Deprecated:  Accessing static trait property t::$P is deprecated, it should only be accessed on a class using the trait in /codes/callToTraitProperty.php on line 8
   
   Deprecated: Accessing static trait property t::$P is deprecated, it should only be accessed on a class using the trait in /codes/callToTraitProperty.php on line 8
   1


PHP version change
__________________
This behavior was deprecated in 8.0

This behavior changed in 8.1


Error Messages
______________

  + `Accessing static trait property %s::%s is deprecated, it should only be accessed on a class using the trait <https://php-errors.readthedocs.io/en/latest/messages/accessing-static-trait-property-%25s%3A%3A%24%25s-is-deprecated.html>`_



