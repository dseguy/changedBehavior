.. _passing-objects-is-deprecated:

Passing Objects Is Deprecated
=============================
.. meta::
	:description:
		Passing Objects Is Deprecated: Several array functions, such as ``current``, ``next``, ``prev``, ``reset`` used to accept both objects and arrays.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Passing Objects Is Deprecated
	:twitter:description: Passing Objects Is Deprecated: Several array functions, such as ``current``, ``next``, ``prev``, ``reset`` used to accept both objects and arrays
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Passing Objects Is Deprecated
	:og:type: article
	:og:description: Several array functions, such as ``current``, ``next``, ``prev``, ``reset`` used to accept both objects and arrays
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/passingObjectIsDeprecated.html
	:og:locale: en

Several array functions, such as ``current``, ``next``, ``prev``, ``reset`` used to accept both objects and arrays. Since PHP 8.0, they only work on arrays.



``each`` is also part of this modernization, although it was entirely removed in PHP 8.0. 



PHP code
________
.. code-block:: php

   <?php
   
   $x = (object) ['a' => 1];
   
   var_dump(current($x));
   
   ?>

Before
______
.. code-block:: output

   int(1)
   

After
______
.. code-block:: output

   PHP Deprecated:  current(): Calling current() on an object is deprecated
   
   Deprecated: current(): Calling current() on an object is deprecated
   int(1)
   


PHP version change
__________________
This behavior changed in 8.1


Error Messages
______________

  + `Calling %s() on an object is deprecated <https://php-errors.readthedocs.io/en/latest/messages/calling-%25s%28%29-on-an-object-is-deprecated.html>`_



