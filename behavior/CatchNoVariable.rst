.. _`catch-without-variable`:

Catch Without Variable
======================
.. meta::
	:description:
		Catch Without Variable: A catch clause doesn't require a storing variable anymore.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Catch Without Variable
	:twitter:description: Catch Without Variable: A catch clause doesn't require a storing variable anymore
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Catch Without Variable
	:og:type: article
	:og:description: A catch clause doesn't require a storing variable anymore
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/CatchNoVariable.html
	:og:locale: en

A catch clause doesn't require a storing variable anymore. It may simply omit it. The exception is then caught, but not provided in the clause.

PHP code
________
.. code-block:: php

   <?php
   
   try {
       throw new Exception('Error');
   } catch (Exception) {
       print 'Exception caught';
   }
   
   ?>

Before
______
.. code-block:: output

   Parse error: syntax error, unexpected ')', expecting '|' or variable (T_VARIABLE)

After
______
.. code-block:: output

   Exception caught


PHP version change
__________________
This behavior changed in 8.0


Error Messages
______________

  + `syntax error, unexpected ')', expecting '|' or variable (T_VARIABLE) <https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-%27%29%27%2C-expecting-%27%7C%27-or-variable-%28t_variable%29.html>`_



