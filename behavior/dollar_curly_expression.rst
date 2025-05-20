.. _`${expression}-is-deprecated`:

${expression} is deprecated
===========================
.. meta::
	:description:
		${expression} is deprecated: The ``$\{}`` allowed the usage of an expression to be used as the name of a variable, inside de double quoted string.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: ${expression} is deprecated
	:twitter:description: ${expression} is deprecated: The ``$\{}`` allowed the usage of an expression to be used as the name of a variable, inside de double quoted string
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: ${expression} is deprecated
	:og:type: article
	:og:description: The ``$\{}`` allowed the usage of an expression to be used as the name of a variable, inside de double quoted string
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/dollar_curly_expression.html
	:og:locale: en

The ``$\{}`` allowed the usage of an expression to be used as the name of a variable, inside de double quoted string. This feature was largely unknown and unused, so it is removed.

PHP code
________
.. code-block:: php

   <?php
   
   $foo = 'bar';
   $bar = 'xyz';
   var_dump("foo is ${$foo}");
   
   ?>

Before
______
.. code-block:: output

   string(10) foo is xyz
   

After
______
.. code-block:: output

   PHP Deprecated:  Using  (variable variables) in strings is deprecated, use {} instead in /codes/dollar_curly_expression.php on line 5
   
   Deprecated: Using  (variable variables) in strings is deprecated, use {} instead in /codes/dollar_curly_expression.php on line 5
   string(10) foo is xyz
   


PHP version change
__________________
This behavior changed in 8.2


Error Messages
______________

  + `0 <https://php-errors.readthedocs.io/en/latest/messages/using-%24%7Bexpr%7D-%28variable-variables%29-in-strings-is-deprecated%2C-use-%7B%24%7Bexpr%7D%7D-instead.html>`_



