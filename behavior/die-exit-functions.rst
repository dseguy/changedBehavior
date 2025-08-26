.. _`die-and-exit-as-functions`:

Die And Exit As Functions
=========================
.. meta::
	:description:
		Die And Exit As Functions: Die and Exit used to be language constructs, a special kind of PHP instructions.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Die And Exit As Functions
	:twitter:description: Die And Exit As Functions: Die and Exit used to be language constructs, a special kind of PHP instructions
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Die And Exit As Functions
	:og:type: article
	:og:description: Die and Exit used to be language constructs, a special kind of PHP instructions
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/die-exit-functions.html
	:og:locale: en

Die and Exit used to be language constructs, a special kind of PHP instructions. As such, they had special abilities and behaviors: in particular, it meant that they could not be called dynamically, with their name in a string. Since PHP 8.4, this is possible.

PHP code
________
.. code-block:: php

   <?php
   
   	//Uncaught Error: Call to undefined function \exit()
       $s = 'exit';
       $s('Exit');
   
   ?>

Before
______
.. code-block:: output

   PHP Fatal error:  Uncaught Error: Call to undefined function exit()

After
______
.. code-block:: output

   Exit


PHP version change
__________________
This behavior changed in 8.4


See Also
________

* `exit <https://www.php.net/manual/en/function.exit.php>`_


Error Messages
______________

  + `0 <https://php-errors.readthedocs.io/en/latest/messages/.html>`_
  + `Call to undefined function exit() <https://php-errors.readthedocs.io/en/latest/messages/call-to-undefined-function-exit%28%29.html>`_



