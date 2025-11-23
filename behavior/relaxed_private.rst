.. _`relaxed-naming-with-class-constant`:

Relaxed Naming With Class Constant
==================================
.. meta::
	:description:
		Relaxed Naming With Class Constant: Relaxed naming is the possibility to use PHP keywords as method or class constant names (for properties, the ``$`` has allowed it for a long time).
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Relaxed Naming With Class Constant
	:twitter:description: Relaxed Naming With Class Constant: Relaxed naming is the possibility to use PHP keywords as method or class constant names (for properties, the ``$`` has allowed it for a long time)
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Relaxed Naming With Class Constant
	:og:type: article
	:og:description: Relaxed naming is the possibility to use PHP keywords as method or class constant names (for properties, the ``$`` has allowed it for a long time)
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/relaxed_private.html
	:og:locale: en

Relaxed naming is the possibility to use PHP keywords as method or class constant names (for properties, the ``$`` has allowed it for a long time).



``private``, ``protected`` and ``public`` were not valid class constant names, until PHP 8.3. They were eligible to be method names, though.





PHP code
________
.. code-block:: php

   <?php
   
   class x {
       public const string private = 'protected';
   }
   
   echo x::private;
   
   ?>

Before
______
.. code-block:: output

   PHP Parse error:  syntax error, unexpected token "private", expecting "=" 
   
   Parse error: syntax error, unexpected token "private", expecting "=" 
   

After
______
.. code-block:: output

   protected


PHP version change
__________________
This behavior changed in 8.3


Error Messages
______________

  + `0 <https://php-errors.readthedocs.io/en/latest/messages/.html>`_



