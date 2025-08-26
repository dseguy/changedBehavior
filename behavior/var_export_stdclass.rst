.. _`var_export()-with-stdclass`:

var_export() With Stdclass
==========================
.. meta::
	:description:
		var_export() With Stdclass: PHP used to export stdClass objects like other classes, with a call to the magic method __set_state().
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: var_export() With Stdclass
	:twitter:description: var_export() With Stdclass: PHP used to export stdClass objects like other classes, with a call to the magic method __set_state()
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: var_export() With Stdclass
	:og:type: article
	:og:description: PHP used to export stdClass objects like other classes, with a call to the magic method __set_state()
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/var_export_stdclass.html
	:og:locale: en

PHP used to export stdClass objects like other classes, with a call to the magic method __set_state(). Since PHP 7.2, it does the export with the cast of an array to (object). This is more readable, and acknowledge the absence of such method for stdClass.

PHP code
________
.. code-block:: php

   <?php
   
      var_export(new stdClass);
   
   ?>

Before
______
.. code-block:: output

   stdClass::__set_state(array())

After
______
.. code-block:: output

   (object) array()


PHP version change
__________________
This behavior changed in 7.2


Error Messages
______________

  + `0 <https://php-errors.readthedocs.io/en/latest/messages/.html>`_



