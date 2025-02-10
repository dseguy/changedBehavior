.. _`in_array()-string-int-comparisons`:

in_array() String Int Comparisons
=================================
.. meta::
	:description:
		in_array() String Int Comparisons: The default comparison style of in_array() is the relaxed one.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: in_array() String Int Comparisons
	:twitter:description: in_array() String Int Comparisons: The default comparison style of in_array() is the relaxed one
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: in_array() String Int Comparisons
	:og:type: article
	:og:description: The default comparison style of in_array() is the relaxed one
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/inArrayStringIng.html
	:og:locale: en

The default comparison style of in_array() is the relaxed one. Hence, the behavior of that comparison changed in PHP 8.0, so does in_array().



By default, comparing strings and integers may not work as before. This is the case when the string doesn't convert obviously to an integer. 



PHP code
________
.. code-block:: php

   <?php
   
   var_dump(in_array(' 1a', [ 1]));
   
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


