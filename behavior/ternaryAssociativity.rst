.. _`ternary-associativity`:

Ternary Associativity
=====================
The ternary operator used to have a left associativity : it would process first the ``then`` and ``else`` clauses, before executing itself.

Since PHP 8.0, the ternary operator produces a fatal error when the nested ternaries are ambiguous.

The update forces the code to use parenthesis, and set the priorities between the operators explicitely.

This doesn't apply to the ``then`` clause, which is always unambiguous.

PHP code
________
.. code-block:: php

   <?php
   
   $a = 2;
   print $a == 1 ? 'one'
        : $a == 2 ? 'two'
        : $a == 3 ? 'three'
        : 'other';
   
   ?>

Before
______
.. code-block:: output

   three

After
______
.. code-block:: output

   Fatal error: Unparenthesized `a ? b : c ? d : e` is not supported. Use either `(a ? b : c) ? d : e` or `a ? b : (c ? d : e)` 


PHP version change: 8.0

See Also
________

* `PHP RFC: Deprecate left-associative ternary operator <https://wiki.php.net/rfc/ternary_associativity>`_


