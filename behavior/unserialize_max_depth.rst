.. _`unserialize()-max_depth-option`:

unserialize() max_depth Option
==============================
unserialize() has now an option to limit the depth of nesting in the decoded structure. When that limit is reached, serialize() emits a warning, and stops processing the string. This is a security option, that prevents deep nested structure to be created and consume a lot of memory and processing power.

PHP code
________
.. code-block:: php

   <?php
   
   $a = [[[[]]]];
   
   $b = serialize($a);
   
   print_r(unserialize($b, ['max_depth' => 2]));

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

   PHP Warning:  unserialize(): Maximum depth of 2 exceeded. The depth limit can be changed using the max_depth unserialize() option or the unserialize_max_depth ini setting in /codes/unserialize_max_depth.php on line 7
   
   Warning: unserialize(): Maximum depth of 2 exceeded. The depth limit can be changed using the max_depth unserialize() option or the unserialize_max_depth ini setting in /codes/unserialize_max_depth.php on line 7
   PHP Warning:  unserialize(): Error at offset 23 of 36 bytes in /codes/unserialize_max_depth.php on line 7
   
   Warning: unserialize(): Error at offset 23 of 36 bytes in /codes/unserialize_max_depth.php on line 7
   


PHP version change: 7.4

See Also
________

* `unserialize() <https://www.php.net/manual/fr/function.unserialize.php>`_


