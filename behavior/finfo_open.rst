.. _`finfo-moved-away-from-resource`:

Finfo Moved Away From Resource
==============================
Finfo functions have moved from resource to objects in PHP 8.1. Instead of returning a resource, it now returns a finfo object. Checks based on is_resource() must be upgraded, and are now dead code.

PHP code
________
.. code-block:: php

   <?php
   
   var_dump(finfo_open());
   
   ?>

Before
______
.. code-block:: output

   resource(4) of type (file_info)
   

After
______
.. code-block:: output

   object(finfo)#1 (0) {
   }
   


PHP version change: 8.1

See Also
________

* `finfo_open <https://www.php.net/manual/fr/function.finfo-open.php>`_


