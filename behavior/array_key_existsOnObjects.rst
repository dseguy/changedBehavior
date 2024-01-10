.. _`array_key_exists()-doesn't-work-on-objects`:

array_key_exists() doesn't work on objects
==========================================
array_key_exists() used to accept arrays and objects, and worked on them indistinctly. 



Since PHP 8.0, array_key_exists() only works on arrays. Objects must be converted to arrays before usage.



PHP code
________
.. code-block:: php

   <?php
   var_dump(array_key_exists('a', (object) ['a' => 1]));
   ?>

Before
______
.. code-block:: output

   true

After
______
.. code-block:: output

   Fatal error


PHP version change
__________________
This behavior was deprecated in Using array_key_exists() on objects is deprecated. Use isset() or property_exists()

This behavior changed in 8.0


Error Messages
______________

Uncaught TypeError: array_key_exists(): Argument #2 ($array) must be of type array, stdClass given


