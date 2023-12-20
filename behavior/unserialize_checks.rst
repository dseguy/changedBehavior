.. _`unserialize()-checks-the-end-of-the-string`:

unserialize() Checks The End Of The String
==========================================
The format used by unserialize() is a closed format: it might be smaller than the string that contains it. Until PHP 8.3, unserialize() stops as soon as it is satisfied, leaving the possible remainer of the string hanging. In PHP 8.3, a warning is raised.

PHP code
________
.. code-block:: php

   <?php
   
     print_r(unserialize('O:1:"a":1:{s:8:"property";s:3:"yes";}  '));
   ?>

Before
______
.. code-block:: output

   __PHP_Incomplete_Class Object
   (
       [__PHP_Incomplete_Class_Name] => a
       [property] => yes
   )
   

After
______
.. code-block:: output

   PHP Warning:  unserialize(): Extra data starting at offset 37 of 39 bytes in /codes/unserialize_checks.php on line 3
   
   Warning: unserialize(): Extra data starting at offset 37 of 39 bytes in /codes/unserialize_checks.php on line 3
   __PHP_Incomplete_Class Object
   (
       [__PHP_Incomplete_Class_Name] => a
       [property] => yes
   )
   


PHP version change
__________________
This behavior changed in 8.3


See Also
________

* `PHP RFC: Make unserialize() emit a warning for trailing bytes <https://wiki.php.net/rfc/unserialize_warn_on_trailing_data>`_


Error Messages
______________

unserialize(): Extra data starting at offset 37 of 39 bytes


