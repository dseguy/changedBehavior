.. _`datetime-with-multiple-signs`:

datetime With Multiple Signs
============================
.. meta::
	:description:
		datetime With Multiple Signs: There can be only one sign character, when instantiating a DateTime object.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: datetime With Multiple Signs
	:twitter:description: datetime With Multiple Signs: There can be only one sign character, when instantiating a DateTime object
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: datetime With Multiple Signs
	:og:type: article
	:og:description: There can be only one sign character, when instantiating a DateTime object
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/datetimeWithMultipleSigns.html
	:og:locale: en

There can be only one sign character, when instantiating a DateTime object. 



Until PHP 8.2, it was possible, though confusing, to use multiple sign ``+`` and ``-``. This is considered a bad practice.



PHP code
________
.. code-block:: php

   <?php
   $time = new \DateTimeImmutable("-+-1 year");
   
   echo $time->format('Y/m/d H:i:s'), "\n";
   ?>

Before
______
.. code-block:: output

   2024/10/18 10:15:30

After
______
.. code-block:: output

   2022/10/18 10:15:30


PHP version change
__________________
This behavior changed in 8.2


Error Messages
______________

  + `0 <https://php-errors.readthedocs.io/en/latest/messages/.html>`_



