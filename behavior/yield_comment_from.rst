.. _`comment-inside-yield-from`:

Comment Inside yield from
=========================
.. meta::
	:description:
		Comment Inside yield from: Since PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Comment Inside yield from
	:twitter:description: Comment Inside yield from: Since PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Comment Inside yield from
	:og:type: article
	:og:description: Since PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/yield_comment_from.html
	:og:locale: en

Since PHP 8.3, there can be a comment, inserted between the ``yield`` and the ``from``. 



In previous versions, this would not compile, unless there was a defined constant called ``from``.

PHP code
________
.. code-block:: php

   <?php
    
   function foo() {
       yield /*a*/  from [3];
   } 
   
   foreach(foo() as $i) {
       print $i;
   }
   ?>

Before
______
.. code-block:: output

   PHP Fatal error:  Uncaught Error: Undefined constant "from" in /codes/yield_comment_from.php:4
   Stack trace:
   #0 /codes/yield_comment_from.php(7): foo()
   #1 {main}
     thrown in /codes/yield_comment_from.php on line 4
   
   Fatal error: Uncaught Error: Undefined constant from in /codes/yield_comment_from.php:4
   Stack trace:
   #0 /codes/yield_comment_from.php(7): foo()
   #1 {main}
     thrown in /codes/yield_comment_from.php on line 4
   

After
______
.. code-block:: output

   3


PHP version change
__________________
This behavior changed in 8.3


Error Messages
______________

  + `0 <https://php-errors.readthedocs.io/en/latest/messages/.html>`_



