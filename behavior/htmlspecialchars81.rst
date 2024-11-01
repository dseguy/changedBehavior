.. _`default-values-with-htmlspecialchars()`:

Default Values With htmlspecialchars()
======================================
The default values of htmlspecialchars() were changed in PHP 8.1. It was ENT_COMPAT and it is now replaced with ``ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401``.



In particular, it means that ``'``, single quote, is now converted in HTML entities.



PHP code
________
.. code-block:: php

   0

Before
______
.. code-block:: output

   

After
______
.. code-block:: output

   


PHP version change
__________________
This behavior changed in 8.1


See Also
________

* `htmlspecialchars <https://www.php.net/htmlspecialchars>`_


