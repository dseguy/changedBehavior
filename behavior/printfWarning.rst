.. _`p`:

p
=


PHP code
________
.. code-block:: php

   <?php
   
   print sprintf(%a %Z, 1, 3);
   
   ?>

Before
______
.. code-block:: output

    

After
______
.. code-block:: output

   PHP Fatal error:  Uncaught ValueError: Unknown format specifier "a"


PHP version change
__________________
This behavior changed in 8.0


