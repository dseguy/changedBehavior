.. _`str_pos()-requires-only-strings`:

str_pos() Requires Only Strings
===============================
.. meta::
	:description:
		str_pos() Requires Only Strings: Until PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: str_pos() Requires Only Strings
	:twitter:description: str_pos() Requires Only Strings: Until PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: str_pos() Requires Only Strings
	:og:type: article
	:og:description: Until PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/str_pos.html
	:og:locale: en

Until PHP 8.0, str_pos() accepted integers as second argument, and would convert them into their equivalent ASCII char. This was a hidden feature of PHP.



Since PHP 8.0, the integer is converted to string as is, and used for the search.

PHP code
________
.. code-block:: php

   <?php
   
   var_dump(strpos('abc ', 32));
   
   ?>

Before
______
.. code-block:: output

   PHP Deprecated:  strpos(): Non-string needles will be interpreted as strings in the future. Use an explicit chr() call to preserve the current behavior in /codes/str_pos.php on line 3
   
   Deprecated: strpos(): Non-string needles will be interpreted as strings in the future. Use an explicit chr() call to preserve the current behavior in /codes/str_pos.php on line 3
   int(3)
   

After
______
.. code-block:: output

   bool(false)
   


PHP version change
__________________
This behavior changed in 8.0


Analyzer
_________

  + `Php/StrposWithIntegers <https://exakat.readthedocs.io/en/latest/Reference/Rules/Php/StrposWithIntegers.html>`_



