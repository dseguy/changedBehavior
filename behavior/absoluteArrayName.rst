.. _`array-has-no-absolute-name`:

Array Has No Absolute Name
==========================
.. meta::
	:description:
		Array Has No Absolute Name: Classes may be used as type, with an optional leading ``\``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Array Has No Absolute Name
	:twitter:description: Array Has No Absolute Name: Classes may be used as type, with an optional leading ``\``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Array Has No Absolute Name
	:og:type: article
	:og:description: Classes may be used as type, with an optional leading ``\``
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/absoluteArrayName.html
	:og:locale: en

Classes may be used as type, with an optional leading ``\``. This is not the case for scalar types, such as ``int`` or ``string``, but it was the case for ``array``. In PHP 8.5, it is now homogenized.

PHP code
________
.. code-block:: php

   <?php
   
   function foo(\array $x = []) {}
   
   ?>

Before
______
.. code-block:: output

   PHP Fatal error:  Cannot use array as default value for parameter $x of type array in /codes/absoluteArrayName.php on line 3
   
   Fatal error: Cannot use array as default value for parameter $x of type array in /codes/absoluteArrayName.php on line 3
   

After
______
.. code-block:: output

   PHP Fatal error:  Cannot use array as a type name as it is reserved in /codes/absoluteArrayName.php on line 3
   Stack trace:
   #0 {main}
   
   Fatal error: Cannot use array as a type name as it is reserved in /codes/absoluteArrayName.php on line 3
   Stack trace:
   #0 {main}
   


PHP version change
__________________
This behavior changed in 8.5


Error Messages
______________

  + `Cannot use "%s" as a type name as it is reserved <https://php-errors.readthedocs.io/en/latest/messages/cannot-use-%22%25s%22-as-a-type-name-as-it-is-reserved.html>`_



