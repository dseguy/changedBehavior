.. _`get_called_class()-cannot-be-called-outside-a-class`:

get_called_class() Cannot Be Called Outside A Class
===================================================
.. meta::
	:description:
		get_called_class() Cannot Be Called Outside A Class: Until PHP 8, get_called_class() generated a warning when called outside a class or an enumration.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: get_called_class() Cannot Be Called Outside A Class
	:twitter:description: get_called_class() Cannot Be Called Outside A Class: Until PHP 8, get_called_class() generated a warning when called outside a class or an enumration
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: get_called_class() Cannot Be Called Outside A Class
	:og:type: article
	:og:description: Until PHP 8, get_called_class() generated a warning when called outside a class or an enumration
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/get_called_class_outside_class.html
	:og:locale: en

Until PHP 8, get_called_class() generated a warning when called outside a class or an enumration. Later, it is a fatal error.

PHP code
________
.. code-block:: php

   <?php
   
   var_dump(get_called_class());
   ?>

Before
______
.. code-block:: output

   PHP Warning:  get_called_class() called from outside a class in /codes/get_called_class_outside_class.php on line 3
   
   Warning: get_called_class() called from outside a class in /codes/get_called_class_outside_class.php on line 3
   bool(false)
   

After
______
.. code-block:: output

   PHP Fatal error:  Uncaught Error: get_called_class() must be called from within a class in /codes/get_called_class_outside_class.php:3
   Stack trace:
   #0 {main}
     thrown in /codes/get_called_class_outside_class.php on line 3
   
   Fatal error: Uncaught Error: get_called_class() must be called from within a class in /codes/get_called_class_outside_class.php:3
   Stack trace:
   #0 {main}
     thrown in /codes/get_called_class_outside_class.php on line 3
   


PHP version change
__________________
This behavior was deprecated in 7.0

This behavior changed in 8.0


Error Messages
______________

  + `get_called_class() called from outside a class <https://php-errors.readthedocs.io/en/latest/messages/get_called_class%28%29+called+from+outside+a+class.html>`_



