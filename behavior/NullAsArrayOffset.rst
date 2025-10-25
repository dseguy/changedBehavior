.. _`null-as-array-offset`:

Null As Array Offset
====================
.. meta::
	:description:
		Null As Array Offset: Array indices may be integers or strings.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Null As Array Offset
	:twitter:description: Null As Array Offset: Array indices may be integers or strings
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Null As Array Offset
	:og:type: article
	:og:description: Array indices may be integers or strings
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/NullAsArrayOffset.html
	:og:locale: en

Array indices may be integers or strings. They may also be boolean or ``null``, although both these types are converted in integers and string (respectively).



In PHP 8.5, a warning is emitted when a null value is used as an index.

PHP code
________
.. code-block:: php

   <?php
   
   $array = ['a' => 2];
   $array[null] = 3;
   
   print $array['']; 
   print $array[null]; 
   
   ?>

Before
______
.. code-block:: output

   33

After
______
.. code-block:: output

   PHP Deprecated:  Using null as an array offset is deprecated, use an empty string instead in /codes/NullAsArrayOffset.php on line 4
   
   Deprecated: Using null as an array offset is deprecated, use an empty string instead in /codes/NullAsArrayOffset.php on line 4
   3PHP Deprecated:  Using null as an array offset is deprecated, use an empty string instead in /codes/NullAsArrayOffset.php on line 7
   
   Deprecated: Using null as an array offset is deprecated, use an empty string instead in /codes/NullAsArrayOffset.php on line 7
   3


PHP version change
__________________
This behavior changed in 8.5



