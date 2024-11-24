.. _`accessing-directly-properties-in-trait`:

Accessing Directly Properties In Trait
======================================
Until PHP 8.1, it was possible, though deprecated, to manipulate directly trait properties: the static properties. 



Since trait only make sense as a part of a class, this operation is now forbidden.



Accessing static methods are also forbidden. Accessing trait constants is also forbidden, although constants in traits were introduced in PHP 8.3. 



PHP code
________
.. code-block:: php

   <?php
   
   trait t {
       public static $P = 1;
       
   }
   
   echo T::$P;
   

Before
______
.. code-block:: output

   1

After
______
.. code-block:: output

   PHP Deprecated:  Accessing static trait property t::$P is deprecated, it should only be accessed on a class using the trait in /codes/callToTraitProperty.php on line 8
   
   Deprecated: Accessing static trait property t::$P is deprecated, it should only be accessed on a class using the trait in /codes/callToTraitProperty.php on line 8
   1


PHP version change
__________________
This behavior was deprecated in 8.0

This behavior changed in 8.1


Error Messages
______________

  + `Accessing static trait property %s::%s is deprecated, it should only be accessed on a class using the trait <https://php-errors.readthedocs.io/en/latest/messages/accessing-static-trait-property-%s::$%s-is-deprecated.html>`_



