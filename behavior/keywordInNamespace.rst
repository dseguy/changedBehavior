.. _`keywords-in-namespace`:

Keywords In Namespace
=====================
PHP didn't accept its own keywords in the definition of a namespace. Nowadays, namespaces are parsed as a whole, and there are no keywords in there. Before, the namespaces were parsed bit by bit, and the presence of the keywords was an impediment in that process. 

PHP code
________
.. code-block:: php

   <?php
   namespace a\eval\b;
   echo __NAMESPACE__;
   ?>

Before
______
.. code-block:: output

   Error

After
______
.. code-block:: output

   a\eval\b


PHP version change
__________________
This behavior was deprecated in The behavior of unparenthesized expressions containing both '.' and '>>'/'<<' will change in PHP 8: '<<'/'>>' will take a higher precedence

This behavior changed in 8.0


