.. _enums-may-now-define-__debuginfo():

Enums May Now Define __debugInfo()
==================================
.. meta::
	:description:
		Enums May Now Define __debugInfo(): Declaring the magic method ``__debugInfo()`` on an ``enum`` used to be a compile-time fatal error, because enum cases were treated like other magic methods that make no sense on enums.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Enums May Now Define __debugInfo()
	:twitter:description: Enums May Now Define __debugInfo(): Declaring the magic method ``__debugInfo()`` on an ``enum`` used to be a compile-time fatal error, because enum cases were treated like other magic methods that make no sense on enums
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Enums May Now Define __debugInfo()
	:og:type: article
	:og:description: Declaring the magic method ``__debugInfo()`` on an ``enum`` used to be a compile-time fatal error, because enum cases were treated like other magic methods that make no sense on enums
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/enumDebugInfo86.html
	:og:locale: en

Declaring the magic method ``__debugInfo()`` on an ``enum`` used to be a compile-time fatal error, because enum cases were treated like other magic methods that make no sense on enums. In PHP 8.6, ``__debugInfo()`` is allowed on enums, so ``var_dump()`` can render a custom representation of an enum case instead of the default one.

PHP code
________
.. code-block:: php

   <?php
   
   enum Suit {
       case Hearts;
       case Spades;
   
       public function __debugInfo(): array {
           return ['custom' => $this->name];
       }
   }
   
   var_dump(Suit::Hearts);
   
   ?>
   

Before
______
.. code-block:: output

   PHP Fatal error:  Enum Suit cannot include magic method __debugInfo in /codes/enumDebugInfo86.php on line 3
   Stack trace:
   #0 {main}
   
   Fatal error: Enum Suit cannot include magic method __debugInfo in /codes/enumDebugInfo86.php on line 3
   Stack trace:
   #0 {main}
   

After
______
.. code-block:: output

   enum(Suit::Hearts) (1) {
     ["custom"]=>
     string(6) "Hearts" 
   }
   


PHP version change
__________________
This behavior changed in 8.6


See Also
________

* `var_dump() <https://www.php.net/var_dump>`_



