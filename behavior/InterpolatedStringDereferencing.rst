.. _`interpolated-string-dereferencing`:

Interpolated String Dereferencing
=================================
Until PHP 8, it was possible to use a string as a variable for an array, or an object, and access, respectively, index, properties or methods. It was not possible for interpolated strings, which are strings that include another string. 



In PHP 8, this is now possible.

PHP code
________
.. code-block:: php

   <?php
   
   $bar = "abc";
   
   echo "foo$bar"[0];
   echo PHP_EOL
   echo "foo$bar"::foo();
   
   class fooabc{
       static function foo() {
           print __METHOD__;
       }
   }
   
   ?>

Before
______
.. code-block:: output

   PHP Parse error:  syntax error, unexpected '[', expecting ';' or ',' 

After
______
.. code-block:: output

   f
   fooabc::foo


PHP version change: 8.0

See Also
________

* `PHP RFC: Arbitrary string interpolation <https://wiki.php.net/rfc/arbitrary_string_interpolation>`_


