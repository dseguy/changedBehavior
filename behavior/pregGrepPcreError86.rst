.. _preg_grep()-returns-false-on-a-pcre-execution-error:

preg_grep() Returns false On A PCRE Execution Error
===================================================
.. meta::
	:description:
		preg_grep() Returns false On A PCRE Execution Error: ``preg_grep()`` filters an array using a regular expression.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: preg_grep() Returns false On A PCRE Execution Error
	:twitter:description: preg_grep() Returns false On A PCRE Execution Error: ``preg_grep()`` filters an array using a regular expression
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: preg_grep() Returns false On A PCRE Execution Error
	:og:type: article
	:og:description: ``preg_grep()`` filters an array using a regular expression
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/pregGrepPcreError86.html
	:og:locale: en

``preg_grep()`` filters an array using a regular expression. Until PHP 8.6, when the underlying PCRE engine failed on one of the array's entries (for example malformed UTF-8 input combined with the ``/u`` modifier), that entry was silently skipped and a partial array was returned for the rest. In PHP 8.6, ``preg_grep()`` returns ``false`` as soon as a PCRE execution error occurs, matching the behavior of the other ``preg_*`` functions.

PHP code
________
.. code-block:: php

   <?php
   
   $arr = ["\xC3\x28", 'valid'];
   var_dump(preg_grep('/./u', $arr));
   
   ?>
   

Before
______
.. code-block:: output

   array(0) {
   }
   

After
______
.. code-block:: output

   bool(false)
   


PHP version change
__________________
This behavior changed in 8.6


See Also
________

* `preg_grep() <https://www.php.net/preg_grep>`_



