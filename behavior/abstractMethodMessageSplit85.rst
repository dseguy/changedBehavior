.. _php-8.5-split-the-missing-abstract-method-message-by-declaration-kind:

PHP 8.5 split the missing-abstract-method message by declaration kind
=====================================================================
.. meta::
	:description:
		PHP 8.5 split the missing-abstract-method message by declaration kind: Before PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: PHP 8.5 split the missing-abstract-method message by declaration kind
	:twitter:description: PHP 8.5 split the missing-abstract-method message by declaration kind: Before PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: PHP 8.5 split the missing-abstract-method message by declaration kind
	:og:type: article
	:og:description: Before PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/abstractMethodMessageSplit85.html
	:og:locale: en

Before PHP 8.5, a class, interface, enum, or anonymous class left with an unimplemented abstract method (inherited from a parent class, or required by an implemented interface) was reported with one generic message: "%s %s contains %d abstract method%s and must therefore be declared abstract or implement the remaining method%s (...)". Enums were the only exception: they already had a dedicated message, "%s %s must implement %d abstract method%s (...)", but its wording incorrectly said "abstract private method%s" even for methods that were not private.



PHP 8.5 gives enums and anonymous classes their own dedicated message, since neither of them can be declared ``abstract`` to defer the missing implementation the way an ordinary class can. Anonymous classes now use the same "must implement N abstract method(s)" message enums already had, and the enum wording drops the incorrect "private" word. Ordinary named classes and interfaces keep using the original generic "contains ... must therefore be declared abstract or implement the remaining method(s)" message.



A related, third message, "%s method %s::%s() must not be abstract", is raised when a method is explicitly marked ``abstract`` inside an interface (redundant, since interface methods are implicitly abstract) or, since PHP 8.5, inside an enum (which can never be declared abstract). Before 8.5, writing ``abstract`` directly on an enum method instead fell through to the generic "must implement N abstract method(s)" message.

PHP code
________
.. code-block:: php

   <?php
   
   interface Colorful {
       function color();
   }
   
   enum Suit implements Colorful {
       case Hearts;
   }
   
   ?>

Before
______
.. code-block:: output

   Fatal error: Enum Suit must implement 1 abstract private method (Colorful::color)
   

After
______
.. code-block:: output

   Fatal error: Enum Suit must implement 1 abstract method (Colorful::color)
   


PHP version change
__________________
This behavior changed in 8.5


Error Messages
______________

  + `%s %s contains %d abstract method%s and must therefore be declared abstract or implement the remaining method%s ( <https://php-errors.readthedocs.io/en/latest/messages/%25s-%25s-contains-%25d-abstract-method%25s-and-must-therefore-be-declared-abstract-or-implement-the-remaining-method%25s-%28.html>`_
  + `%s %s must implement %d abstract method%s ( <https://php-errors.readthedocs.io/en/latest/messages/%25s-%25s-must-implement-%25d-abstract-method%25s-%28.html>`_
  + `%s method %s::%s() must not be abstract <https://php-errors.readthedocs.io/en/latest/messages/%25s-method-%25s%3A%3A%25s%28%29-must-not-be-abstract.html>`_



