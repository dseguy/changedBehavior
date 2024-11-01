.. _`str_replace()-on-arrays-of-objects`:

str_replace() On Arrays Of Objects
==================================
str_replace() accepts an array of strings as third argument: it applies all the replacements to all the strings in that arguments.



Until PHP 8.0, it was possible to pass an array of arrays, and the inner arrays would be omitted in the replacement. In PHP 8.0, the objects are cast to a string: ``stringeable`` objects are always converted, while non-``stringeable`` objects yields a Fatal error.



This is also applicable to str_ireplace().

PHP code
________
.. code-block:: php

   <?php
   
   class x {
   	function __toString() {
   		return 'def';
   	}
   }
   
   var_dump(str_replace('a', 'b', [new x]));
   
   var_dump(str_replace('a', 'b', [new stdclass]));
   
   ?>

Before
______
.. code-block:: output

   array(1) {
     [0]=>
     object(stdClass)#1 (0) {
     }
   }
   

After
______
.. code-block:: output

   array(1) {
     [0]=>
     string(3) def
   }
   PHP Fatal error:  Uncaught Error: Object of class stdClass could not be converted to string in /codes/str_replaceOnArraysOfObjects.php:11
   


PHP version change
__________________
This behavior changed in 8.0


Error Messages
______________

  + `Object of class stdClass could not be converted to string <https://php-errors.readthedocs.io/en/latest/messages/Object of class stdClass could not be converted to string.html>`_



