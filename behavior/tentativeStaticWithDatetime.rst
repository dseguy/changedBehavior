.. _`tentative-static-returntype-with-datetime`:

Tentative Static Returntype With Datetime
=========================================
The createFromImmutable() method from DateTime and DateTimeImmutable always returns an object of the same class. In PHP 8.2 and later, the return type is now ``static``, it will tentatively return a children class, when the method is called from that child class.

PHP code
________
.. code-block:: php

   <?php
   
   class A extends DateTime{}
   
   $date = new DateTimeImmutable(2014-06-20 11:45 Europe/London);
   
   $mutable = A::createFromImmutable( $date );
   
   var_dump($mutable);
   ?>

Before
______
.. code-block:: output

   

After
______
.. code-block:: output

   object(A)#2 (3) {
     [date]=>
     string(26) 2014-06-20 11:45:00.000000
     [timezone_type]=>
     int(3)
     [timezone]=>
     string(13) Europe/London
   }
   


PHP version change: 8.2

