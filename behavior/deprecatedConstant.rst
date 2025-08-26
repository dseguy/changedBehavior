.. _`constant-%s-is-deprecated`:

Constant %s is deprecated
=========================
.. meta::
	:description:
		Constant %s is deprecated: With new versions, PHP deprecates some constants.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Constant %s is deprecated
	:twitter:description: Constant %s is deprecated: With new versions, PHP deprecates some constants
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Constant %s is deprecated
	:og:type: article
	:og:description: With new versions, PHP deprecates some constants
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/deprecatedConstant.html
	:og:locale: en

With new versions, PHP deprecates some constants. Mostly global constants, but also class constants, when needed.



8.4

+ SUNFUNCS_RET_TIMESTAMP

+ SUNFUNCS_RET_STRING

+ SUNFUNCS_RET_DOUBLE



8.3

+ ASSERT_ACTIVE

+ ASSERT_BAIL

+ ASSERT_CALLBACK

+ ASSERT_EXCEPTION

+ ASSERT_WARNING









PHP code
________
.. code-block:: php

   <?php
   
   echo SUNFUNCS_RET_TIMESTAMP;
   
   ?>

Before
______
.. code-block:: output

   0

After
______
.. code-block:: output

   PHP Deprecated:  Constant SUNFUNCS_RET_TIMESTAMP is deprecated in /codes/deprecatedConstant.php on line 3
   
   Deprecated: Constant SUNFUNCS_RET_TIMESTAMP is deprecated in /codes/deprecatedConstant.php on line 3
   0


PHP version change
__________________
This behavior changed in 8.4


Error Messages
______________

  + `0 <https://php-errors.readthedocs.io/en/latest/messages/.html>`_



