.. _`tentative-static-returntype-with-datetime`:

Tentative Static Returntype With Datetime
=========================================
.. meta::
	:description:
		Tentative Static Returntype With Datetime: The createFromImmutable() method from DateTime and DateTimeImmutable always returns an object of the same class.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Tentative Static Returntype With Datetime
	:twitter:description: Tentative Static Returntype With Datetime: The createFromImmutable() method from DateTime and DateTimeImmutable always returns an object of the same class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Tentative Static Returntype With Datetime
	:og:type: article
	:og:description: The createFromImmutable() method from DateTime and DateTimeImmutable always returns an object of the same class
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/tentativeStaticWithDatetime.html
	:og:locale: en

The createFromImmutable() method from DateTime and DateTimeImmutable always returns an object of the same class. In PHP 8.2 and later, the return type is now ``static``, it will tentatively return a children class, when the method is called from that child class.

PHP code
________
.. code-block:: php

   <?php
   
   class A extends DateTime{}
   
   $date = new DateTimeImmutable("2014-06-20 11:45 Europe/London");
   
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
     ["date"]=>
     string(26) "2014-06-20 11:45:00.000000" 
     ["timezone_type"]=>
     int(3)
     ["timezone"]=>
     string(13) "Europe/London" 
   }
   


PHP version change
__________________
This behavior changed in 8.2


