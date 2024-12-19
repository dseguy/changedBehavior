.. _`class_alias()-works-on-internal-classes`:

class_alias() Works On Internal Classes
=======================================
class_alias() makes an alias for a class, an enumeration, an interface or a trait. Until PHP 8.3, it was only possible on custom structures.

PHP code
________
.. code-block:: php

   <?php
   
   class_alias(stdClass::class, A::class);
   
   var_dump(new A);

Before
______
.. code-block:: output

   First argument of class_alias() must be a name of user defined class

After
______
.. code-block:: output

   object(stdClass)#1 (0) {
   }


PHP version change
__________________
This behavior changed in 8.3


See Also
________

* `class_alias() <https://php.net/class_alias>`_


Error Messages
______________

  + `First argument of class_alias() must be a name of user defined class <https://php-errors.readthedocs.io/en/latest/messages/First+argument+of+class_alias%28%29+must+be+a+name+of+user+defined+class.html>`_



