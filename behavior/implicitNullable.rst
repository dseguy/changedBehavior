.. _`implicit-nullable`:

Implicit Nullable
=================
.. meta::
	:description:
		Implicit Nullable: A typed argument with a default value of ``null`` was also implicitly nullable: it would accept null as a value.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Implicit Nullable
	:twitter:description: Implicit Nullable: A typed argument with a default value of ``null`` was also implicitly nullable: it would accept null as a value
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Implicit Nullable
	:og:type: article
	:og:description: A typed argument with a default value of ``null`` was also implicitly nullable: it would accept null as a value
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/implicitNullable.html
	:og:locale: en

A typed argument with a default value of ``null`` was also implicitly nullable: it would accept null as a value. This is deprecated in PHP 8.4, and will be removed in PHP 9.0. It is recommended to make the nullable type explicit in the code.



That issue applies to arguments in methods and functions, but not on properties or returned values. 



PHP code
________
.. code-block:: php

   <?php
   
   function foo(int $a = null) {
   	var_dump($a);
   }
   
   foo(1);
   foo(null);
   
   ?>

Before
______
.. code-block:: output

   int(1)
   NULL
   

After
______
.. code-block:: output

   PHP Deprecated:  foo(): Implicitly marking parameter $a as nullable is deprecated, the explicit nullable type must be used instead in /codes/implicitNullable.php on line 3
   
   Deprecated: foo(): Implicitly marking parameter $a as nullable is deprecated, the explicit nullable type must be used instead in /codes/implicitNullable.php on line 3
   int(1)
   NULL
   


PHP version change
__________________
This behavior was deprecated in 8.4

This behavior changed in 9.0


Error Messages
______________

  + `Default value for property of type int may not be null. Use the nullable type ?int to allow null default value <https://php-errors.readthedocs.io/en/latest/messages/Default+value+for+property+of+type+int+may+not+be+null.+Use+the+nullable+type+%3Fint+to+allow+null+default+value.html>`_



