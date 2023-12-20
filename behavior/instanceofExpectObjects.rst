.. _`instanceof-expect-objects`:

instanceof Expect Objects
=========================
PHP used to report a fatal error when provided with a value that is not an object. After PHP 7.3, it would return false in such case, and not break the execution.

PHP code
________
.. code-block:: php

   <?php
   
   var_dump(null instanceof Countable);
   
   ?>

Before
______
.. code-block:: output

   PHP Fatal error:  instanceof expects an object instance, constant given in /codes/instanceofExpectObjects.php on line 3
   
   Fatal error: instanceof expects an object instance, constant given in /codes/instanceofExpectObjects.php on line 3
   

After
______
.. code-block:: output

   bool(false)
   


PHP version change
__________________
This behavior changed in 7.3


See Also
________

* `Type Operator <https://www.php.net/manual/en/language.operators.type.php#language.operators.type>`_


Error Messages
______________

instanceof expects an object instance, constant given


