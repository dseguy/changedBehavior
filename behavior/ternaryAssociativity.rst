.. _ternary-associativity:

Ternary Associativity
=====================
.. meta::
	:description:
		Ternary Associativity: The ternary operator used to have a left associativity : it would process first the ``then`` and ``else`` clauses, before executing itself.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Ternary Associativity
	:twitter:description: Ternary Associativity: The ternary operator used to have a left associativity : it would process first the ``then`` and ``else`` clauses, before executing itself
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Ternary Associativity
	:og:type: article
	:og:description: The ternary operator used to have a left associativity : it would process first the ``then`` and ``else`` clauses, before executing itself
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/ternaryAssociativity.html
	:og:locale: en

The ternary operator used to have a left associativity : it would process first the ``then`` and ``else`` clauses, before executing itself.



Since PHP 8.0, the ternary operator produces a fatal error when the nested ternaries are ambiguous.



The update forces the code to use parenthesis, and set the priorities between the operators explicitly.



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


PHP version change
__________________
This behavior was deprecated in 7.4

This behavior changed in 8.0


See Also
________

* `PHP RFC: Deprecate left-associative ternary operator <https://wiki.php.net/rfc/ternary_associativity>`_


Error Messages
______________

  + `Unparenthesized \`a ? b : c ? d : e\` is not supported. <https://php-errors.readthedocs.io/en/latest/messages/unparenthesized-%60a-%3F-b-%3A-c-%3F-d-%3A-e%60-is-not-supported..html>`_


Analyzer
_________

  + `Php/NestedTernaryWithoutParenthesis <https://exakat.readthedocs.io/en/latest/Reference/Rules/Php/NestedTernaryWithoutParenthesis.html>`_



