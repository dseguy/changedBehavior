.. _ini_get_all()-includes-the-built-in-default-value:

ini_get_all() Includes The Built-in Default Value
=================================================
.. meta::
	:description:
		ini_get_all() Includes The Built-in Default Value: ``ini_get_all()`` used to return, for each directive, only the ``global_value``, ``local_value`` and ``access`` keys.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: ini_get_all() Includes The Built-in Default Value
	:twitter:description: ini_get_all() Includes The Built-in Default Value: ``ini_get_all()`` used to return, for each directive, only the ``global_value``, ``local_value`` and ``access`` keys
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: ini_get_all() Includes The Built-in Default Value
	:og:type: article
	:og:description: ``ini_get_all()`` used to return, for each directive, only the ``global_value``, ``local_value`` and ``access`` keys
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/iniGetAllBuiltinDefault.html
	:og:locale: en

``ini_get_all()`` used to return, for each directive, only the ``global_value``, ``local_value`` and ``access`` keys. In PHP 8.6, a fourth key, ``builtin_default_value``, is added, containing the value that is hard-coded in PHP itself, regardless of any ``php.ini`` or ``ini_set()`` change.

PHP code
________
.. code-block:: php

   <?php
   
   $all = ini_get_all('core', true);
   var_dump($all['precision']);
   
   ?>

Before
______
.. code-block:: output

   array(3) {
     [global_value]=>
     string(2) 14
     [local_value]=>
     string(2) 14
     [access]=>
     int(7)
   }
   

After
______
.. code-block:: output

   array(4) {
     [global_value]=>
     string(2) 14
     [local_value]=>
     string(2) 14
     [builtin_default_value]=>
     string(2) 14
     [access]=>
     int(7)
   }
   


PHP version change
__________________
This behavior changed in 8.6


See Also
________

* `ini_get_all() <https://www.php.net/ini_get_all>`_



