.. _`no-reference-to-$globals-variable`:

No Reference To $GLOBALS Variable
=================================
.. meta::
	:description:
		No Reference To $GLOBALS Variable: Since PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: No Reference To $GLOBALS Variable
	:twitter:description: No Reference To $GLOBALS Variable: Since PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: No Reference To $GLOBALS Variable
	:og:type: article
	:og:description: Since PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/NoReferenceToGLOBALS.html
	:og:locale: en

Since PHP 8.2, it is not possible anymore to create a reference to the $GLOBALS variable. It prevents any unexpected updates to this array.



It is still possible to make a reference to any of the element of that array, individually.



PHP code
________
.. code-block:: php

   <?php
   
   $b = &$GLOBALS;
   
   print_r($b);
   
   ?>

Before
______
.. code-block:: output

   Array
   (
       [_GET] => Array
           (
           )
   
       [_POST] => Array
           (
           )
   
       [_COOKIE] => Array
           (
           )
   // .... and more
   
   ?>

After
______
.. code-block:: output

   PHP Fatal error:  Cannot acquire reference to $GLOBALS


PHP version change
__________________
This behavior changed in 8.2


Error Messages
______________

  + `0 <https://php-errors.readthedocs.io/en/latest/messages/.html>`_



