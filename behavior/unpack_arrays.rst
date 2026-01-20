.. _`unpack-arrays-in-arrays`:

Unpack Arrays In Arrays
=======================
.. meta::
	:description:
		Unpack Arrays In Arrays: The ellipsis operator can now be used in arrays, with an effect similar to array_merge().
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Unpack Arrays In Arrays
	:twitter:description: Unpack Arrays In Arrays: The ellipsis operator can now be used in arrays, with an effect similar to array_merge()
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Unpack Arrays In Arrays
	:og:type: article
	:og:description: The ellipsis operator can now be used in arrays, with an effect similar to array_merge()
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/unpack_arrays.html
	:og:locale: en

The ellipsis operator can now be used in arrays, with an effect similar to array_merge(). In particular, the string keys are now supported.

PHP code
________
.. code-block:: php

   <?php
   
   $array = [...['a' => 'foo'], ...['b' => 'bar']];
   
   print_r($array);
   
   ?>

Before
______
.. code-block:: output

   PHP Fatal error:  Cannot unpack array with string keys
   
   Fatal error: Cannot unpack array with string keys
   

After
______
.. code-block:: output

   Array
   (
       [a] => foo
       [b] => bar
   )
   


PHP version change
__________________
This behavior changed in 8.1


Error Messages
______________

  + `Cannot unpack array with string keys <https://php-errors.readthedocs.io/en/latest/messages/cannot-unpack-array-with-string-keys.html>`_


Analyzer
_________

  + `Structures/ArrayWithStringEllipsis <https://exakat.readthedocs.io/en/latest/Reference/Rules/Structures/ArrayWithStringEllipsis.html>`_



