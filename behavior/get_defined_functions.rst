.. _get_defined_functions()-doesn't-exclude-diabled-functions-anymore:

get_defined_functions() Doesn't Exclude Diabled Functions Anymore
=================================================================
.. meta::
	:description:
		get_defined_functions() Doesn't Exclude Diabled Functions Anymore: get_defined_functions() used to have one parameter, called ``$exclude_disabled``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: get_defined_functions() Doesn't Exclude Diabled Functions Anymore
	:twitter:description: get_defined_functions() Doesn't Exclude Diabled Functions Anymore: get_defined_functions() used to have one parameter, called ``$exclude_disabled``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: get_defined_functions() Doesn't Exclude Diabled Functions Anymore
	:og:type: article
	:og:description: get_defined_functions() used to have one parameter, called ``$exclude_disabled``
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/get_defined_functions.html
	:og:locale: en

get_defined_functions() used to have one parameter, called ``$exclude_disabled``. It used to exclude functions appearing under the directive ``disabled_functions``. 



Since PHP 8.0, this parameter is not used anymore. It emits a warning since PHP 8.5.

PHP code
________
.. code-block:: php

   <?php
   
   print_r(get_defined_functions(true));
   
   ?>

Before
______
.. code-block:: output

   Array
   (
       [internal] => Array
           (
               [0] => exit
               [1] => die
               [2] => zend_version
               // many more functions
           )
   
       [user] => Array
           (
           )
   
   )
   

After
______
.. code-block:: output

   PHP Deprecated:  get_defined_functions(): The $exclude_disabled parameter has no effect since PHP 8.0 in /codes/get_defined_functions.php on line 3
   
   Deprecated: get_defined_functions(): The $exclude_disabled parameter has no effect since PHP 8.0 in /codes/get_defined_functions.php on line 3
   Array
   (
       [internal] => Array
           (
               [0] => clone
               [1] => exit
               [2] => die
               [3] => zend_version
               // many more functions
           )
   
       [user] => Array
           (
           )
   
   )
   


PHP version change
__________________
This behavior changed in 8.5



