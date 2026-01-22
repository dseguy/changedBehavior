.. _\__sleep()-method-enforces-return-type:

__sleep() Method Enforces Return Type
=====================================
.. meta::
	:description:
		__sleep() Method Enforces Return Type: __sleep is a magic method that lists the name of the variables to serialize.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: __sleep() Method Enforces Return Type
	:twitter:description: __sleep() Method Enforces Return Type: __sleep is a magic method that lists the name of the variables to serialize
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: __sleep() Method Enforces Return Type
	:og:type: article
	:og:description: __sleep is a magic method that lists the name of the variables to serialize
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/nonArrayWithSleep.html
	:og:locale: en

__sleep is a magic method that lists the name of the variables to serialize. It should come as an array, and is enforced as such since PHP 8.0.

PHP code
________
.. code-block:: php

   <?php
   
   class x {
   	function __sleep() {
   		return 3;
   	}
   }
   
   serialize(new x);
   
   ?>

Before
______
.. code-block:: output

   PHP Notice:  serialize(): __sleep should return an array only containing the names of instance-variables to serialize
   
   Notice: serialize(): __sleep should return an array only containing the names of instance-variables to serialize
   

After
______
.. code-block:: output

   PHP Warning:  serialize(): x::__sleep() should return an array only containing the names of instance-variables to serialize
   
   Warning: serialize(): x::__sleep() should return an array only containing the names of instance-variables to serialize
   


PHP version change
__________________
This behavior changed in 8.0


Error Messages
______________

  + `serialize(): __sleep should return an array only containing the names of instance-variables to serialize <https://php-errors.readthedocs.io/en/latest/messages/__sleep-should-return-an-array-only-containing-the-names-of-instance-variables-to-serialize..html>`_



