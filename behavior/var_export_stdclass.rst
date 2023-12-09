.. _`var_export()-with-stdclass`:

var_export() With Stdclass
==========================
PHP used to export stdClass objects like other classes, with a call to the magic method __set_state(). Since PHP 7.2, it does the export with the cast of an array to (object). This is more readable, and acknowledge the absence of such method for stdClass.

PHP code
________
.. code-block:: php

   <?php
   var_export(new stdClass);
   ?>

Before
______
.. code-block:: output

   stdClass::__set_state(array())

After
______
.. code-block:: output

   (object) array()


PHP version change: 7.2

