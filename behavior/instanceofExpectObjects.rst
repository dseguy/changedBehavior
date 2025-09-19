.. _`instanceof-expect-objects`:

instanceof Expect Objects
=========================
.. meta::
	:description:
		instanceof Expect Objects: PHP used to report a fatal error when provided with a value that is not an object.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: instanceof Expect Objects
	:twitter:description: instanceof Expect Objects: PHP used to report a fatal error when provided with a value that is not an object
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: instanceof Expect Objects
	:og:type: article
	:og:description: PHP used to report a fatal error when provided with a value that is not an object
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/instanceofExpectObjects.html
	:og:locale: en

PHP used to report a fatal error when provided with a value that is not an object. After PHP 7.3, it would return false in such case, and not break the execution.

PHP code
________
.. code-block:: php

   <?php
   
   var_dump(null instanceof Countable);
   
   function foo() : ?X { /**/ }
   var_dump(foo() instanceof Countable); // possible error when foo() returns null
   
   ?>

Before
______
.. code-block:: output

   PHP Fatal error:  instanceof expects an object instance, constant given 
   
   Fatal error: instanceof expects an object instance, constant given 
   

After
______
.. code-block:: output

   bool(false)
   


PHP version change
__________________
This behavior changed in 7.3


See Also
________

* `Type Operator <https://www.php.net/manual/en/language.operators.type.php#language.operators.type>`_



