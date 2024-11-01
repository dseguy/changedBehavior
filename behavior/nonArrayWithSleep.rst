.. _`__sleep()-method-enforces-return-type`:

__sleep() Method Enforces Return Type
=====================================
__sleep is a magic method that lists the name of the variables to serialize. It should come as an array, and is enforced as such since PHP 8.0.

PHP code
________
.. code-block:: php

   <?php
   
   class x {
   	function __sleep() {
   		return 3;
   	}
   }
   
   serialize(new x);
   
   ?>

Before
______
.. code-block:: output

   PHP Notice:  serialize(): __sleep should return an array only containing the names of instance-variables to serialize in /codes/nonArrayWithSleep.php on line 9
   
   Notice: serialize(): __sleep should return an array only containing the names of instance-variables to serialize in /codes/nonArrayWithSleep.php on line 9
   

After
______
.. code-block:: output

   PHP Warning:  serialize(): x::__sleep() should return an array only containing the names of instance-variables to serialize in /codes/nonArrayWithSleep.php on line 9
   
   Warning: serialize(): x::__sleep() should return an array only containing the names of instance-variables to serialize in /codes/nonArrayWithSleep.php on line 9
   


PHP version change
__________________
This behavior changed in 8.0


Error Messages
______________

  + `serialize(): __sleep should return an array only containing the names of instance-variables to serialize <https://php-errors.readthedocs.io/en/latest/messages/serialize(): __sleep should return an array only containing the names of instance-variables to serialize.html>`_



