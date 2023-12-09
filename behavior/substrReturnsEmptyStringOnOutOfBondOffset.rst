.. _`substr()-returns-empty-string-on-out-of-bond-offset`:

substr() Returns Empty String On Out Of Bond Offset
===================================================
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
   


PHP version change: 8.0

See Also
________

* `substr() <https://www.php.net/substr>`_


