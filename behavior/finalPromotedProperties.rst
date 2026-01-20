.. _`final-promoted-properties`:

Final Promoted Properties
=========================
.. meta::
	:description:
		Final Promoted Properties: Promoted properties could not be final until PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Final Promoted Properties
	:twitter:description: Final Promoted Properties: Promoted properties could not be final until PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Final Promoted Properties
	:og:type: article
	:og:description: Promoted properties could not be final until PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/finalPromotedProperties.html
	:og:locale: en

Promoted properties could not be final until PHP 8.5.

PHP code
________
.. code-block:: php

   <?php
   
   class x {
       function __construct( 
           public final int $i
       ) {}
   }
   
   var_dump(new x(1));
   
   ?>

Before
______
.. code-block:: output

   PHP Fatal error:  Cannot use the final modifier on a parameter
   
   Fatal error: Cannot use the final modifier on a parameter
   

After
______
.. code-block:: output

   object(x)#1 (1) {
     ["i"]=>
     int(1)
   }
   


PHP version change
__________________
This behavior changed in 8.5


Error Messages
______________

  + `Cannot use the final modifier on a parameter <https://php-errors.readthedocs.io/en/latest/messages/cannot-use-the-final-modifier-on-a-parameter.html>`_



