.. _`return-reference-on-void`:

Return Reference On Void
========================
There are methods that return void; and methods that return a reference. Until PHP 8.1, they could be the same, although a Notice was emitted. This is now deprecated behavior in PHP 8.1, and shall disappear in PHP 9.

PHP code
________
.. code-block:: php

   

Before
______
.. code-block:: output

   fooPHP Notice:  Only variable references should be returned by reference in /codes/return_reference_on_void.php on line 6
   
   Notice: Only variable references should be returned by reference in /codes/return_reference_on_void.php on line 6
   

After
______
.. code-block:: output

   PHP Deprecated:  Returning by reference from a void function is deprecated in /codes/return_reference_on_void.php on line 3
   
   Deprecated: Returning by reference from a void function is deprecated in /codes/return_reference_on_void.php on line 3
   fooPHP Notice:  Only variable references should be returned by reference in /codes/return_reference_on_void.php on line 6
   
   Notice: Only variable references should be returned by reference in /codes/return_reference_on_void.php on line 6
   


PHP version change
__________________
This behavior was deprecated in 8.1

This behavior changed in 9.0


Error Messages
______________

Returning by reference from a void function is deprecated


