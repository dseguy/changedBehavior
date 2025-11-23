.. _`strpos()-with-null-haystack`:

strpos() With Null Haystack
===========================
.. meta::
	:description:
		strpos() With Null Haystack: PHP accepted ``null`` as first parameter ``$string`` of strpos().
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: strpos() With Null Haystack
	:twitter:description: strpos() With Null Haystack: PHP accepted ``null`` as first parameter ``$string`` of strpos()
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: strpos() With Null Haystack
	:og:type: article
	:og:description: PHP accepted ``null`` as first parameter ``$string`` of strpos()
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/strposWithNullHaystack.html
	:og:locale: en

PHP accepted ``null`` as first parameter ``$string`` of strpos(). Then, it cast the null to empty string, and returned immediately ``false``, as nothing was found in such  string.



Since PHP 8.2, this is a deprecated behavior, with a warning message. It will be removed in PHP 9.

PHP code
________
.. code-block:: php

   <?php
   
   var_dump(strpos(null, '1'));
   
   ?>

Before
______
.. code-block:: output

   false

After
______
.. code-block:: output

   strpos(): Passing null to parameter #1 ($haystack) of type string is deprecated


PHP version change
__________________
This behavior was deprecated in 8.2

This behavior changed in 9.0



