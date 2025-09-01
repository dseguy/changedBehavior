.. _`eval()-without-try`:

eval() Without Try
==================
.. meta::
	:description:
		eval() Without Try: The ``eval()`` command throws an error in case of unparsable PHP code.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: eval() Without Try
	:twitter:description: eval() Without Try: The ``eval()`` command throws an error in case of unparsable PHP code
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: eval() Without Try
	:og:type: article
	:og:description: The ``eval()`` command throws an error in case of unparsable PHP code
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/EvalWithouTry.html
	:og:locale: en

The ``eval()`` command throws an error in case of unparsable PHP code. This error can be caught, to handle gracefully the situation, with a try-catch structure.



It is recommended to always use try-catch when dealing with eval().



It is possible to differentiate a parse error in the host code from a parse error in the eval() string with the error message: when it is in the eval() string, the error message mention eval: ``Parse error: syntax error, unexpected identifier "a" in file.ph : eval()'d code on line 1``.

PHP code
________
.. code-block:: php

   <?php
   
   try {
       eval('A = 1');
   } catch (Error $e) {
       echo $e->getMessage();
   }
   
   ?>

Before
______
.. code-block:: output

   Parse error: syntax error, unexpected '='

After
______
.. code-block:: output

   syntax error, unexpected token "="


PHP version change
__________________
This behavior changed in 7.0


Analyzer
_________

  + `Structures/EvalWithoutTry <https://exakat.readthedocs.io/en/latest/Reference/Rules/Structures/EvalWithoutTry.html>`_



