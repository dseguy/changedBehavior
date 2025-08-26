.. _`::class-on-object`:

::class On Object
=================
.. meta::
	:description:
		::class On Object: The ::class operator provides the fully qualified name of the identifier or object.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: ::class On Object
	:twitter:description: ::class On Object: The ::class operator provides the fully qualified name of the identifier or object
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: ::class On Object
	:og:type: article
	:og:description: The ::class operator provides the fully qualified name of the identifier or object
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/ClassOnIdentifier.html
	:og:locale: en

The ::class operator provides the fully qualified name of the identifier or object. It used to be working only on identifier or names, but it also works on objects, via variables and properties: then, it provides the fully qualified name of the underlying class. 



This is very convenient when the code needs to get a hold on the class, and only the object is provided.

PHP code
________
.. code-block:: php

   <?php
   
   $a = new stdclass;
   echo $a::class;
   
   ?>

Before
______
.. code-block:: output

   PHP Fatal error:  Cannot use ::class with dynamic class name
   
   Fatal error: Cannot use ::class with dynamic class name
   

After
______
.. code-block:: output

   stdClass


PHP version change
__________________
This behavior changed in 8.0


Error Messages
______________

  + `Cannot use ::class with dynamic class name <https://php-errors.readthedocs.io/en/latest/messages/cannot-use-%3A%3Aclass-with-dynamic-class-name.html>`_



