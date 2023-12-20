.. _`__set_state()-method-must-be-static`:

__set_state() Method Must Be Static
===================================
Starting with PHP 8.0, the magic method __set_state() must be static when declared in a class.

PHP code
________
.. code-block:: php

   <?php
   
   class x {
       function __set_state() {}
       
   }

Before
______
.. code-block:: output

   

After
______
.. code-block:: output

   PHP Fatal error:  Method x::__set_state() must be static
   
   Fatal error: Method x::__set_state() must be static
   


PHP version change
__________________
This behavior changed in 8.0


See Also
________

* `__set_state() <https://www.php.net/manual/en/language.oop5.magic.php#object.set-state>`_


Error Messages
______________

Method x::__set_state() must be static


