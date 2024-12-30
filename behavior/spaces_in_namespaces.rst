.. _`spaces-in-namespaces`:

Spaces In Namespaces
====================
It used to be valid syntax to have a new line or a space in a namespace name. This is not the case in PHP 8.0 anymore.

PHP code
________
.. code-block:: php

   <?php
   
   namespace Vendor
   \Package;
   
   echo 1;
   
   ?>

Before
______
.. code-block:: output

   1

After
______
.. code-block:: output

   PHP Parse error:  syntax error, unexpected fully qualified name "\Package", expecting "{" in /codes/spaces_in_namespaces.php on line 4
   
   Parse error: syntax error, unexpected fully qualified name "\Package", expecting "{" in /codes/spaces_in_namespaces.php on line 4
   


PHP version change
__________________
This behavior changed in 8.0


Error Messages
______________

  + `syntax error, unexpected fully qualified name "\Package", expecting "{" <https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-fully-qualified-name-%22%5C%5Cxxx%22%2C-expecting-%22%7B%22.html>`_



