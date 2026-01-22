.. _get_object_vars()-does-not-work-on-arrayobject:

get_object_vars() Does Not Work On ArrayObject
==============================================
.. meta::
	:description:
		get_object_vars() Does Not Work On ArrayObject: Until PHP 7.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: get_object_vars() Does Not Work On ArrayObject
	:twitter:description: get_object_vars() Does Not Work On ArrayObject: Until PHP 7
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: get_object_vars() Does Not Work On ArrayObject
	:og:type: article
	:og:description: Until PHP 7
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/getObjectVars.html
	:og:locale: en

Until PHP 7.4, ArrayObject used to export its properties as they were defined in the array. Since then, ArrayObject does not export any property anymore. They are still accessible via the normal property syntax, just not with get_object_vars() anymore.

PHP code
________
.. code-block:: php

   <?php
   
   // Illustration courtesy of Doug Bierer
   $obj = new ArrayObject(['A' => 1,'B' => 2,'C' => 3]);
   var_dump($obj->getArrayCopy());
   var_dump(get_object_vars($obj));
   //var_dump((array) $obj);
   
   ?>

Before
______
.. code-block:: output

   array(3) {
     [A]=>
     int(1)
     [B]=>
     int(2)
     [C]=>
     int(3)
   }
   array(3) {
     [A]=>
     int(1)
     [B]=>
     int(2)
     [C]=>
     int(3)
   }
   

After
______
.. code-block:: output

   array(3) {
     [A]=>
     int(1)
     [B]=>
     int(2)
     [C]=>
     int(3)
   }
   array(0) {
   }
   


PHP version change
__________________
This behavior changed in 7.4



