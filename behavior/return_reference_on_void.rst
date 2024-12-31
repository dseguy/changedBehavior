.. _`return-reference-on-void`:

Return Reference On Void
========================
.. meta::
	:description:
		Return Reference On Void: There are methods that return void.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Return Reference On Void
	:twitter:description: Return Reference On Void: There are methods that return void
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Return Reference On Void
	:og:type: article
	:og:description: There are methods that return void
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/return_reference_on_void.html
	:og:locale: en

There are methods that return void; and methods that return a reference. Until PHP 8.1, they could be the same, although a Notice was emitted. This is now deprecated behavior in PHP 8.1, and shall disappear in PHP 9.

PHP code
________
.. code-block:: php

   

Before
______
.. code-block:: output

   fooPHP Notice:  Only variable references should be returned by reference in /codes/return_reference_on_void.php on line 6
   
   Notice: Only variable references should be returned by reference in /codes/return_reference_on_void.php on line 6
   

After
______
.. code-block:: output

   PHP Deprecated:  Returning by reference from a void function is deprecated in /codes/return_reference_on_void.php on line 3
   
   Deprecated: Returning by reference from a void function is deprecated in /codes/return_reference_on_void.php on line 3
   fooPHP Notice:  Only variable references should be returned by reference in /codes/return_reference_on_void.php on line 6
   
   Notice: Only variable references should be returned by reference in /codes/return_reference_on_void.php on line 6
   


PHP version change
__________________
This behavior was deprecated in 8.1

This behavior changed in 9.0


Error Messages
______________

  + `Returning by reference from a void function is deprecated <https://php-errors.readthedocs.io/en/latest/messages/returning-by-reference-from-a-void-function-is-deprecated.html>`_



