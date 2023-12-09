.. _`dynamic-class-constant`:

Dynamic Class Constant
======================
To access a constant value with its name in a string, one required the constant() function. ``constant('\A::'.$constantName)``.



In PHP 8.3, there is a dedicated syntax, to access those constants dynamically. 



PHP code
________
.. code-block:: php

   <?php
   
   class a {
   	public const A = 1;
   }
   
   $b = 'A';
   
   echo A::{$b};
   
   ?>

Before
______
.. code-block:: output

   PHP Parse error:  syntax error

After
______
.. code-block:: output

   1


PHP version change: 8.3

