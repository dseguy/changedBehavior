.. _`no-new-line-in-namespaces`:

No New Line In Namespaces
=========================
.. meta::
	:description:
		No New Line In Namespaces: Until PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: No New Line In Namespaces
	:twitter:description: No New Line In Namespaces: Until PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: No New Line In Namespaces
	:og:type: article
	:og:description: Until PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/MultilineQualifiedName.html
	:og:locale: en

Until PHP 8.0, it was possible to use new lines inside a namespace: they would be removed at execution time, to build the actual namespace. Since PHP 8.0, it is not allowed anymore.

PHP code
________
.. code-block:: php

   <?php
   
   // constant
       \A 
                              \B 
                              \C
                              ;
   
   // type
       function foo() : \A 
                              \B 
                              \C
                              {}
   
   ?>

Before
______
.. code-block:: output

   PHP Parse error:  syntax error, unexpected ';', expecting '{' 
   
   Parse error: syntax error, unexpected ';', expecting '{' 
   

After
______
.. code-block:: output

   PHP Parse error:  syntax error, unexpected fully qualified name \B
   
   Parse error: syntax error, unexpected fully qualified name \B 
   


PHP version change
__________________
This behavior changed in 8.0


Error Messages
______________

  + `syntax error, unexpected ';', expecting '{' <https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-%27%3B%27%2C-expecting-%27%7B%27.html>`_



