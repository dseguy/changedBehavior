.. _`__tostring-can-throw-exceptions`:

__toString Can Throw Exceptions
===============================
.. meta::
	:description:
		__toString Can Throw Exceptions: Until PHP 7.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: __toString Can Throw Exceptions
	:twitter:description: __toString Can Throw Exceptions: Until PHP 7
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: __toString Can Throw Exceptions
	:og:type: article
	:og:description: Until PHP 7
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/toStringCanThrow.html
	:og:locale: en

Until PHP 7.4, the magic method ``__toString()`` could not throw exception, in case of problem occuring during processing. 



Since PHP 7.4, it is possible.

PHP code
________
.. code-block:: php

   <?php
   
   class X {
       function __toString() {
           throw new \Exception('error'.__METHOD__);
       }
   }
   
   (string) new X;
   
   ?>

Before
______
.. code-block:: output

   PHP Fatal error:  Method X::__toString() must not throw an exception, caught Exception: errorX::__toString in /codes/toStringCanThrow.php on line 0
   
   Fatal error: Method X::__toString() must not throw an exception, caught Exception: errorX::__toString in /codes/toStringCanThrow.php on line 0
   

After
______
.. code-block:: output

   PHP Fatal error:  Uncaught Exception: errorX::__toString in /codes/toStringCanThrow.php:5
   Stack trace:
   #0 /codes/toStringCanThrow.php(9): X->__toString()
   #1 {main}
     thrown in /codes/toStringCanThrow.php on line 5
   
   Fatal error: Uncaught Exception: errorX::__toString in /codes/toStringCanThrow.php:5
   Stack trace:
   #0 /codes/toStringCanThrow.php(9): X->__toString()
   #1 {main}
     thrown in /codes/toStringCanThrow.php on line 5
   


PHP version change
__________________
This behavior changed in 7.4


