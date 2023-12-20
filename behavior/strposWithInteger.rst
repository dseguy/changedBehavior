.. _`strpos()-with-integer-argument`:

strpos() With Integer Argument
==============================


PHP code
________
.. code-block:: php

   <?php
   
   var_dump(@strpos('abc', 98));
   
   ?>

Before
______
.. code-block:: output

   int(1)

After
______
.. code-block:: output

   false


PHP version change
__________________
This behavior changed in 8.0


