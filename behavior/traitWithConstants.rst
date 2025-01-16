.. _`constants-in-traits`:

Constants In Traits
===================
.. meta::
	:description:
		Constants In Traits: Constants are allowed in traits in PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Constants In Traits
	:twitter:description: Constants In Traits: Constants are allowed in traits in PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Constants In Traits
	:og:type: article
	:og:description: Constants are allowed in traits in PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/traitWithConstants.html
	:og:locale: en

Constants are allowed in traits in PHP 8.3 and more recent. Until then, they were not supported.

PHP code
________
.. code-block:: php

   <?php
   
   trait t {
       const A = 1;
   }
   
   class x {
   
   use t;
   }
   
   echo X::A;
   ?>

Before
______
.. code-block:: output

   PHP Fatal error:  Traits cannot have constants

After
______
.. code-block:: output

   1


PHP version change
__________________
This behavior changed in 8.2


Error Messages
______________

  + `Traits cannot have constants <https://php-errors.readthedocs.io/en/latest/messages/traits-cannot-have-constants.html>`_



