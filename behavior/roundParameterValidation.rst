.. _`round()-mode-validation`:

round() Mode Validation
=======================
.. meta::
	:description:
		round() Mode Validation: round() function has four modes, defined with 4 constants.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: round() Mode Validation
	:twitter:description: round() Mode Validation: round() function has four modes, defined with 4 constants
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: round() Mode Validation
	:og:type: article
	:og:description: round() function has four modes, defined with 4 constants
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/roundParameterValidation.html
	:og:locale: en

round() function has four modes, defined with 4 constants. When the 3rd argument is not one of those four constants, PHP used to silently use PHP_ROUND_HALF_UP as default value. In PHP 8.4, a ValueError is provided.

PHP code
________
.. code-block:: php

   <?php
   
   print $a = round(1.2, 2, 333);
   
   ?>

Before
______
.. code-block:: output

   1

After
______
.. code-block:: output

   round(): Argument #3 ($mode) must be a valid rounding mode (PHP_ROUND_*)


PHP version change
__________________
This behavior changed in 8.4


See Also
________

* `round() <https://www.php.net/round>`_


Error Messages
______________

  + `must be a valid rounding mode (RoundingMode::*) <https://php-errors.readthedocs.io/en/latest/messages/must-be-a-valid-rounding-mode-%28roundingmode%3A%3A%2A%29.html>`_



