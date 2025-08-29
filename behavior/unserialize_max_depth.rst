.. _`unserialize()-max_depth-option`:

unserialize() max_depth Option
==============================
.. meta::
	:description:
		unserialize() max_depth Option: unserialize() has now an option to limit the depth of nesting in the decoded structure.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: unserialize() max_depth Option
	:twitter:description: unserialize() max_depth Option: unserialize() has now an option to limit the depth of nesting in the decoded structure
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: unserialize() max_depth Option
	:og:type: article
	:og:description: unserialize() has now an option to limit the depth of nesting in the decoded structure
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/unserialize_max_depth.html
	:og:locale: en

unserialize() has now an option to limit the depth of nesting in the decoded structure. When that limit is reached, serialize() emits a warning, and stops processing the string. This is a security option, that prevents deep nested structures to be created and consume a lot of memory and processing power.

PHP code
________
.. code-block:: php

   <?php
   
   // 4 levels of nesting
   $a = [[[[]]]];
   
   $b = serialize($a);
   
   print_r(unserialize($b, ['max_depth' => 2]));
   
   ?>

Before
______
.. code-block:: output

   Array
   (
       [0] => Array
           (
               [0] => Array
                   (
                       [0] => Array
                           (
                           )
   
                   )
   
           )
   
   )
   
   

After
______
.. code-block:: output

   PHP Warning:  unserialize(): Maximum depth of 2 exceeded. The depth limit can be changed using the max_depth unserialize() option or the unserialize_max_depth ini setting
   
   Warning: unserialize(): Maximum depth of 2 exceeded. The depth limit can be changed using the max_depth unserialize() option or the unserialize_max_depth ini setting
   PHP Warning:  unserialize(): Error at offset 23 of 36 bytes
   
   Warning: unserialize(): Error at offset 23 of 36 bytes
   


PHP version change
__________________
This behavior changed in 7.4


See Also
________

* `unserialize() <https://www.php.net/manual/fr/function.unserialize.php>`_


Error Messages
______________

  + `Maximum depth of %d exceeded. The depth limit can be changed using the max_depth unserialize() option <https://php-errors.readthedocs.io/en/latest/messages/maximum-depth-of-%25d-exceeded.-the-depth-limit-can-be-changed-using-the-max_depth-unserialize%28%29-option.html>`_



