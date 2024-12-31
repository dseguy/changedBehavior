.. _`$globals-assignement`:

$GLOBALS Assignement
====================
.. meta::
	:description:
		$GLOBALS Assignement: It is not possible to assign the ``$GLOBALS`` variable anymore.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: $GLOBALS Assignement
	:twitter:description: $GLOBALS Assignement: It is not possible to assign the ``$GLOBALS`` variable anymore
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: $GLOBALS Assignement
	:og:type: article
	:og:description: It is not possible to assign the ``$GLOBALS`` variable anymore
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/GLOBALSAssignement.html
	:og:locale: en

It is not possible to assign the ``$GLOBALS`` variable anymore. The individual values may still be assigned directly. 

PHP code
________
.. code-block:: php

   <?php
   
   $GLOBALS['a']  = 1;
   
   $b = &$GLOBALS;
   $b = array();
   
   print_r($GLOBALS);
   
   ?>

Before
______
.. code-block:: output

   Array
   (
   )
   

After
______
.. code-block:: output

   PHP Fatal error:  Cannot acquire reference to $GLOBALS


PHP version change
__________________
This behavior changed in 8.1


Error Messages
______________

  + `Cannot acquire reference to $GLOBALS <https://php-errors.readthedocs.io/en/latest/messages/Cannot+acquire+reference+to+%24GLOBALS.html>`_



