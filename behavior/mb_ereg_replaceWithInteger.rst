.. _`integer-regex-with-mb_ereg_replace()`:

Integer Regex With mb_ereg_replace()
====================================
.. meta::
	:description:
		Integer Regex With mb_ereg_replace(): mb_ereg_replace() used to accept an integer as a regex.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Integer Regex With mb_ereg_replace()
	:twitter:description: Integer Regex With mb_ereg_replace(): mb_ereg_replace() used to accept an integer as a regex
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Integer Regex With mb_ereg_replace()
	:og:type: article
	:og:description: mb_ereg_replace() used to accept an integer as a regex
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/mb_ereg_replaceWithInteger.html
	:og:locale: en

mb_ereg_replace() used to accept an integer as a regex. It would turn that integer into its equivalent ASCII character and use it as a regex. This behavior has been removed.



A similar change of behavior happened with ``strpos()``.



PHP code
________
.. code-block:: php

   <?php
   
   var_dump(mb_ereg_replace(98, 'Z', 'abc'));
   
   ?>

Before
______
.. code-block:: output

   PHP Deprecated:  mb_ereg_replace(): Non-string patterns will be interpreted as strings in the future. Use an explicit chr() call to preserve the current behavior in /codes/mb_ereg_replaceWithInteger.php on line 3
   
   Deprecated: mb_ereg_replace(): Non-string patterns will be interpreted as strings in the future. Use an explicit chr() call to preserve the current behavior in /codes/mb_ereg_replaceWithInteger.php on line 3
   string(3) "aZc" 
   

After
______
.. code-block:: output

   string(3) "abc" 
   


PHP version change
__________________
This behavior changed in 8.0


