.. _`spaceship`:

spaceship
=========
With the change of comparison between integers and strings, the spaceship was also impacted. Some spaceship comparisons did change, and are not returning the same results than before. 

PHP code
________
.. code-block:: php

   <?php
   
   var_dump( 0 <=> 'foo');
   var_dump( 0 <=> '');
   
   ?>

Before
______
.. code-block:: output

   int(0)
   int(0)

After
______
.. code-block:: output

   int(-1)
   int(1)


PHP version change: 8.0

