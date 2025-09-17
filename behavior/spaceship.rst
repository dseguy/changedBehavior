.. _`spaceship-operator-results`:

spaceship Operator Results
==========================
.. meta::
	:description:
		spaceship Operator Results: With the change of comparison between integers and strings, the spaceship was also impacted.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: spaceship Operator Results
	:twitter:description: spaceship Operator Results: With the change of comparison between integers and strings, the spaceship was also impacted
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: spaceship Operator Results
	:og:type: article
	:og:description: With the change of comparison between integers and strings, the spaceship was also impacted
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/spaceship.html
	:og:locale: en

With the change of comparison between integers and strings, the spaceship was also impacted. Some spaceship comparisons did change, and are not returning the same results than before. 

PHP code
________
.. code-block:: php

   <?php
   
   var_dump( 0 <=> 'foo');
   var_dump( 0 <=> '');
   
   ?>

Before
______
.. code-block:: output

   int(0)
   int(0)

After
______
.. code-block:: output

   int(-1)
   int(1)


PHP version change
__________________
This behavior changed in 8.0


Error Messages
______________

  + `0 <https://php-errors.readthedocs.io/en/latest/messages/.html>`_



