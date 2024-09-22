.. _`php-native-return-types-are-now-enforced`:

PHP native return types are now enforced
========================================
PHP provides native interfaces: they include methods and their type. Until PHP 8.1, such types were not enforced, for backward compatibility reasons. Nowadays, these types are enforced, just like any other interface. It makes PHP native interfaces on the same footing as custom interfaces.



In case this migration is too ambitious, it is possible to use the ``#[\ReturnTypeWillChange]`` to suppress the warning.



PHP code
________
.. code-block:: php

   <?php
   
   class x implements Iterator {
   
   function __construct() {
   	print __METHOD__;
   }
   
   public function current()  {}
   public function key(): mixed {}
   public function next(): void {}
   public function rewind(): void {}
   public function valid(): bool {}
   } 
   
   new x; 

Before
______
.. code-block:: output

   x::__construct

After
______
.. code-block:: output

   PHP Deprecated:  Return type of x::current() should either be compatible with Iterator::current(): mixed, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice in /codes/returnTypeEnforce.php on line 9
   
   Deprecated: Return type of x::current() should either be compatible with Iterator::current(): mixed, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice in /codes/returnTypeEnforce.php on line 9
   x::__construct


PHP version change
__________________
This behavior changed in 8.1


Error Messages
______________

`Return type of x::current() should either be compatible with Iterator::current(): mixed, <https://php-errors.readthedocs.io/en/latest/messages/return-type-of-x::current()-should-either-be-compatible-with-iterator::current():-mixed,.html>`_



