.. _`unserialize()-checks-the-end-of-the-string`:

unserialize() Checks The End Of The String
==========================================
.. meta::
	:description:
		unserialize() Checks The End Of The String: The format used by unserialize() is a closed format: it might be smaller than the string that contains it.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: unserialize() Checks The End Of The String
	:twitter:description: unserialize() Checks The End Of The String: The format used by unserialize() is a closed format: it might be smaller than the string that contains it
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: unserialize() Checks The End Of The String
	:og:type: article
	:og:description: The format used by unserialize() is a closed format: it might be smaller than the string that contains it
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/unserialize_checks.html
	:og:locale: en

The format used by unserialize() is a closed format: it might be smaller than the string that contains it. Until PHP 8.3, unserialize() stops as soon as it is satisfied, leaving the possible remainder of the string hanging. In PHP 8.3, a warning is raised.

PHP code
________
.. code-block:: php

   <?php
   
   print_r(unserialize('O:1:"a":1:{s:8:"property";s:3:"yes";}  '));
   
   ?>

Before
______
.. code-block:: output

   __PHP_Incomplete_Class Object
   (
       [__PHP_Incomplete_Class_Name] => a
       [property] => yes
   )
   

After
______
.. code-block:: output

   PHP Warning:  unserialize(): Extra data starting at offset 37 of 39 bytes
   
   Warning: unserialize(): Extra data starting at offset 37 of 39 bytes
   __PHP_Incomplete_Class Object
   (
       [__PHP_Incomplete_Class_Name] => a
       [property] => yes
   )
   


PHP version change
__________________
This behavior changed in 8.3


See Also
________

* `PHP RFC: Make unserialize() emit a warning for trailing bytes <https://wiki.php.net/rfc/unserialize_warn_on_trailing_data>`_



