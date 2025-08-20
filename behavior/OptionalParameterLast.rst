.. _`optional-parameter-are-after-compulsory-parameters`:

Optional Parameter Are After Compulsory Parameters
==================================================
.. meta::
	:description:
		Optional Parameter Are After Compulsory Parameters: Optional parameters have a default value.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Optional Parameter Are After Compulsory Parameters
	:twitter:description: Optional Parameter Are After Compulsory Parameters: Optional parameters have a default value
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Optional Parameter Are After Compulsory Parameters
	:og:type: article
	:og:description: Optional parameters have a default value
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/OptionalParameterLast.html
	:og:locale: en

Optional parameters have a default value. When running the functioncall, PHP assigns the parameters by position. This way, the first parameter would get the value, even though it has the default value, and then, there will be a missing argument for the second one.



Since PHP 8.0, PHP reports that situation. It might be turned into an error in PHP 9.0

PHP code
________
.. code-block:: php

   <?php
   
   function foo($a = 1, $b) {
       print $a $b\n;
   }
   
   foo(1, 2);
   
   ?>

Before
______
.. code-block:: output

   PHP Deprecated:  Required parameter $b follows optional parameter $a in /codes/OptionalParameterLast.php on line 3
   
   Deprecated: Required parameter $b follows optional parameter $a in /codes/OptionalParameterLast.php on line 3
   1 2
   

After
______
.. code-block:: output

   PHP Deprecated:  foo(): Optional parameter $a declared before required parameter $b is implicitly treated as a required parameter in /codes/OptionalParameterLast.php on line 3
   
   Deprecated: foo(): Optional parameter $a declared before required parameter $b is implicitly treated as a required parameter in /codes/OptionalParameterLast.php on line 3
   1 2
   


PHP version change
__________________
This behavior changed in 8.0


Error Messages
______________

  + `Required parameter $%s follows optional parameter $%s <https://php-errors.readthedocs.io/en/latest/messages/required-parameter-%24%25s-follows-optional-parameter-%24%25s.html>`_



