.. _setlocale()-rejects-extra-arguments-when-$locales-is-an-array:

setlocale() Rejects Extra Arguments When $locales Is An Array
=============================================================
.. meta::
	:description:
		setlocale() Rejects Extra Arguments When $locales Is An Array: ``setlocale()`` accepts either a list of individual locale name arguments, or a single array of candidate locale names as its second parameter.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: setlocale() Rejects Extra Arguments When $locales Is An Array
	:twitter:description: setlocale() Rejects Extra Arguments When $locales Is An Array: ``setlocale()`` accepts either a list of individual locale name arguments, or a single array of candidate locale names as its second parameter
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: setlocale() Rejects Extra Arguments When $locales Is An Array
	:og:type: article
	:og:description: ``setlocale()`` accepts either a list of individual locale name arguments, or a single array of candidate locale names as its second parameter
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/setlocaleArrayVariadicTypeError86.html
	:og:locale: en

``setlocale()`` accepts either a list of individual locale name arguments, or a single array of candidate locale names as its second parameter. Until PHP 8.6, passing an array as ``$locales`` while also passing further variadic locale arguments was silently accepted, and the extra arguments were ignored. In PHP 8.6, passing any additional locale argument alongside an array ``$locales`` throws a ``TypeError``.

PHP code
________
.. code-block:: php

   <?php
   
   try {
       var_dump(setlocale(LC_ALL, ['en_US'], 'fr_FR'));
   } catch (\TypeError $e) {
       echo "TypeError: ".$e->getMessage()."\n";
   }
   
   ?>
   

Before
______
.. code-block:: output

   string(5) "en_US" 
   

After
______
.. code-block:: output

   TypeError: setlocale() expects exactly 2 arguments when argument #2 ($locales) is an array, 3 given
   


PHP version change
__________________
This behavior changed in 8.6


See Also
________

* `setlocale() <https://www.php.net/setlocale>`_


Error Messages
______________

  + `setlocale() expects exactly 2 arguments when argument #2 ($locales) is an array, 3 given <https://php-errors.readthedocs.io/en/latest/messages/setlocale%28%29-rejects-extra-arguments-when-%24locales-is-an-array.html>`_



