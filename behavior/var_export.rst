.. _`var_export()-format`:

var_export() Format
===================
PHP used to export an object with a fully qualified name, except for the first backslash. Since PHP 8.2, the name is a fully qualified one, and may be used in any namespace, without adaptation.

PHP code
________
.. code-block:: php

   <?php
   class x {}
   var_export(new x);
   ?>

Before
______
.. code-block:: output

   x::__set_state(array(
   ))

After
______
.. code-block:: output

   \x::__set_state(array(
   ))


PHP version change
__________________
This behavior changed in 8.2


See Also
________

* `var_export() combined with enum produces code unsuitable for inclusion in namespaces <\https://github.com/php/php-src/issues/8232>`_
* `Add leading backslash to enum and class names in var_export <\https://externals.io/message/117466>`_


