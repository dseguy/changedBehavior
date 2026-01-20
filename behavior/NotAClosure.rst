.. _`not-in-a-closure`:

Not In A Closure
================
.. meta::
	:description:
		Not In A Closure: Calling ``Closure`` native methods outside a closure or an arrow function leads to an error message.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Not In A Closure
	:twitter:description: Not In A Closure: Calling ``Closure`` native methods outside a closure or an arrow function leads to an error message
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Not In A Closure
	:og:type: article
	:og:description: Calling ``Closure`` native methods outside a closure or an arrow function leads to an error message
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/NotAClosure.html
	:og:locale: en

Calling ``Closure`` native methods outside a closure or an arrow function leads to an error message. 



This applies to functions or methods, that are later turned into a closure with the first class callable syntax: while that syntax creates a closure, the underlying code is not a closure, and cannot access the related features.



The warning message, used in previous PHP version, was not as explicit as the new one.

PHP code
________
.. code-block:: php

   <?php
   
   function foo() {
       Closure::getCurrent();
   }
   
   foo(); // Error
   
   foo(...)(); // Error: foo was put inside a closure, but it is still not a closure itself.
   
   ?>

Before
______
.. code-block:: output

   PHP Fatal error:  Uncaught Error: Call to undefined method Closure::getCurrent()

After
______
.. code-block:: output

   PHP Fatal error:  Uncaught Error: Current function is not a closure
   
   Fatal error: Uncaught Error: Current function is not a closure
   


PHP version change
__________________
This behavior changed in 8.5


Error Messages
______________

  + `Call to undefined method Closure::getCurrent() <https://php-errors.readthedocs.io/en/latest/messages/call-to-undefined-method-%25s%3A%3A%25s%28%29.html>`_
  + `Current function is not a closure <https://php-errors.readthedocs.io/en/latest/messages/call-to-undefined-method-%25s%3A%3A%25s%28%29.html>`_



