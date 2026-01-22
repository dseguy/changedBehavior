.. _e_user_error-is-deprecated:

E_USER_ERROR Is Deprecated
==========================
.. meta::
	:description:
		E_USER_ERROR Is Deprecated: The PHP native constant E_USER_ERROR is deprecated.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: E_USER_ERROR Is Deprecated
	:twitter:description: E_USER_ERROR Is Deprecated: The PHP native constant E_USER_ERROR is deprecated
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: E_USER_ERROR Is Deprecated
	:og:type: article
	:og:description: The PHP native constant E_USER_ERROR is deprecated
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/E_USER_ERROR.html
	:og:locale: en

The PHP native constant E_USER_ERROR is deprecated. It should not be used anymore with the ``trigger()`` function, nor anywhere else in the code. It shall be removed entirely in PHP 9.

PHP code
________
.. code-block:: php

   <?php
   
   trigger_error('user error', E_USER_ERROR);
   
   ?>

Before
______
.. code-block:: output

   PHP Deprecated:  Passing E_USER_ERROR to trigger_error() is deprecated since 8.4, throw an exception or call exit with a string message instead
   
   Deprecated: Passing E_USER_ERROR to trigger_error() is deprecated since 8.4, throw an exception or call exit with a string message instead
   PHP Fatal error:  user error
   
   Fatal error: user error
   

After
______
.. code-block:: output

   PHP Fatal error:  user error
   
   Fatal error: user error


PHP version change
__________________
This behavior changed in 8.5


Error Messages
______________

  + `Passing E_USER_ERROR to trigger_error() is deprecated since 8.4, throw an exception or call exit with a string message instead <https://php-errors.readthedocs.io/en/latest/messages/passing-e_user_error-to-trigger_error%28%29-is-deprecated-since-8.4%2C-throw-an-exception-or-call-exit-with-a-string-message-instead.html>`_


Analyzer
_________

  + `Php/TriggerErrorUsage <https://exakat.readthedocs.io/en/latest/Reference/Rules/Php/TriggerErrorUsage.html>`_



