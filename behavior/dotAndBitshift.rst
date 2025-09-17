.. _`dot-and-bitshift-priority`:

Dot And Bitshift Priority
=========================
.. meta::
	:description:
		Dot And Bitshift Priority: The dot (concatenation) and bitshift (<< and >>) operators have a distinct priority in PHP .
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Dot And Bitshift Priority
	:twitter:description: Dot And Bitshift Priority: The dot (concatenation) and bitshift (<< and >>) operators have a distinct priority in PHP 
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Dot And Bitshift Priority
	:og:type: article
	:og:description: The dot (concatenation) and bitshift (<< and >>) operators have a distinct priority in PHP 
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/dotAndBitshift.html
	:og:locale: en

The dot (concatenation) and bitshift (<< and >>) operators have a distinct priority in PHP 

PHP code
________
.. code-block:: php

   <?php
   echo 3 . 4 << 1;
   ?>

Before
______
.. code-block:: output

   68

After
______
.. code-block:: output

   38


PHP version change
__________________
This behavior was deprecated in The behavior of unparenthesized expressions containing both '.' and '>>'/'<<' will change in PHP 8: '<<'/'>>' will take a higher precedence

This behavior changed in 8.0


See Also
________

* `Other incompatible Changes <https://www.php.net/manual/en/migration80.incompatible.php>`_
* `Bitwise Operators <https://www.php.net/manual/en/language.operators.bitwise.php>`_


Error Messages
______________

  + `0 <https://php-errors.readthedocs.io/en/latest/messages/.html>`_



