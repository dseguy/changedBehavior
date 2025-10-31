.. _`no-case-with-a-semi-colon`:

No Case With A Semi-colon
=========================
.. meta::
	:description:
		No Case With A Semi-colon: It was little known that one could use a semi-colon ``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: No Case With A Semi-colon
	:twitter:description: No Case With A Semi-colon: It was little known that one could use a semi-colon ``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: No Case With A Semi-colon
	:og:type: article
	:og:description: It was little known that one could use a semi-colon ``
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/case-with-semicolon.html
	:og:locale: en

It was little known that one could use a semi-colon ``;`` in a case entry, instead of a colon ``:``. Both would act as a delimiter between the case value and the actualy case block.



Since PHP 8.5, it is forbidden.

PHP code
________
.. code-block:: php

   <?php
   
   $a = 1;
   switch ($a) {
       case 1; 
       echo 2;
        break;
   }
   
   ?>

Before
______
.. code-block:: output

   2

After
______
.. code-block:: output

   PHP Deprecated:  Case statements followed by a semicolon (;) are deprecated, use a colon (:) instead
   
   Deprecated: Case statements followed by a semicolon (;) are deprecated, use a colon (:) instead
   2


PHP version change
__________________
This behavior changed in 8.5



