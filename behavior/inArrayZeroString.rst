.. _`in_array()-doesn't-confuse-0-and-empty-string`:

in_array() Doesn't Confuse 0 And Empty String
=============================================
.. meta::
	:description:
		in_array() Doesn't Confuse 0 And Empty String: in_array() makes a relaxed comparison of values in its arguments.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: in_array() Doesn't Confuse 0 And Empty String
	:twitter:description: in_array() Doesn't Confuse 0 And Empty String: in_array() makes a relaxed comparison of values in its arguments
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: in_array() Doesn't Confuse 0 And Empty String
	:og:type: article
	:og:description: in_array() makes a relaxed comparison of values in its arguments
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/inArrayZeroString.html
	:og:locale: en

in_array() makes a relaxed comparison of values in its arguments. When there are 0 and empty strings, those used to be considered identical in PHP 7 and they are now distinct in PHP 8. 



This behavior change doesn't impact calls to in_array() with the third argument ``strict_comparison``. That feature is unchanged in PHP 8.



PHP code
________
.. code-block:: php

   <?php
   
   var_dump(in_array('', [ 0]));
   
   ?>

Before
______
.. code-block:: output

   bool(true)
   

After
______
.. code-block:: output

   bool(false)
   


PHP version change
__________________
This behavior changed in 8.0


See Also
________

* `in_array <https://www.php.net/manual/en/function.in-array.php>`_



