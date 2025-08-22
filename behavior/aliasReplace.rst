.. _`alias-replace-class`:

Alias Replace Class
===================
.. meta::
	:description:
		Alias Replace Class: When a class is defined before an alias, with ``use``, it used to yield a fatal error.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Alias Replace Class
	:twitter:description: Alias Replace Class: When a class is defined before an alias, with ``use``, it used to yield a fatal error
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Alias Replace Class
	:og:type: article
	:og:description: When a class is defined before an alias, with ``use``, it used to yield a fatal error
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/aliasReplace.html
	:og:locale: en

When a class is defined before an alias, with ``use``, it used to yield a fatal error. Since PHP 8.4, and when the alias is in a different block than the definition, it is possible to replace a class with another one. 



While the fatal error has been removed, it now means that a class, local to a namespace, is not always described by its relative name. The class is still distinguisable with its absolute name.

PHP code
________
.. code-block:: php

   <?php
   
   namespace A {
           class xBefore {}
   }
   
   namespace A {
       use y as xAfter;
       use y as xBefore;
       class y {}
   
     print get_class(new y);    
   }
   
   
   namespace A {
           class xAfter {}
   }
   
   ?>

Before
______
.. code-block:: output

   PHP Fatal error:  Cannot use y as xBefore because the name is already in use in /codes/aliasReplace.php on line 10
   
   Fatal error: Cannot use y as xBefore because the name is already in use in /codes/aliasReplace.php on line 10
   

After
______
.. code-block:: output

   A\y


PHP version change
__________________
This behavior changed in 8.4


