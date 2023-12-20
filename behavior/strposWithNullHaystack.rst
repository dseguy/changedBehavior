.. _`strpos()-with-null-haystack`:

strpos() With Null Haystack
===========================


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


