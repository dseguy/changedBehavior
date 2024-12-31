.. _`substr()-returns-empty-string-on-out-of-bond-offset`:

substr() Returns Empty String On Out Of Bond Offset
===================================================
.. meta::
	:description:
		substr() Returns Empty String On Out Of Bond Offset: substr() used to return false when the parameters used to extract the string were out of bound, or well out of the string sizes.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: substr() Returns Empty String On Out Of Bond Offset
	:twitter:description: substr() Returns Empty String On Out Of Bond Offset: substr() used to return false when the parameters used to extract the string were out of bound, or well out of the string sizes
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: substr() Returns Empty String On Out Of Bond Offset
	:og:type: article
	:og:description: substr() used to return false when the parameters used to extract the string were out of bound, or well out of the string sizes
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/substrReturnsEmptyStringOnOutOfBondOffset.html
	:og:locale: en

substr() used to return false when the parameters used to extract the string were out of bound, or well out of the string sizes. With PHP 8.0, this is not reported as an error anymore, and fails silently.



One collateral impact is that code that checks on the returned value to be false is now dead code.

PHP code
________
.. code-block:: php

   <?php
   
   var_dump(substr('FooBar', 42, 3)); // "" in PHP >=8.0, false in PHP < 8.0
   var_dump(mb_substr('FooBar', 42, 3)); // "" in PHP >=8.0, false in PHP < 8.0);
   var_dump(iconv_substr('FooBar', 42, 3)); // "" in PHP >=8.0, false in PHP < 8.0);
   var_dump(grapheme_substr('FooBar', 42, 3)); // "" in PHP >=8.0, false in PHP < 8.0);
   ?>

Before
______
.. code-block:: output

   bool(false)
   string(0) "" 
   bool(false)
   bool(false)
   

After
______
.. code-block:: output

   string(0) "" 
   string(0) "" 
   string(0) "" 
   string(0) "" 
   


PHP version change
__________________
This behavior changed in 8.0


See Also
________

* `substr() <https://www.php.net/substr>`_


