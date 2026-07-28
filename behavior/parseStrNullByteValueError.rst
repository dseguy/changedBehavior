.. _parse_str()-rejects-nul-bytes-in-the-query-string:

parse_str() Rejects NUL Bytes In The Query String
=================================================
.. meta::
	:description:
		parse_str() Rejects NUL Bytes In The Query String: ``parse_str()`` used to accept a query string containing a NUL byte and silently parsed only the part before it.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: parse_str() Rejects NUL Bytes In The Query String
	:twitter:description: parse_str() Rejects NUL Bytes In The Query String: ``parse_str()`` used to accept a query string containing a NUL byte and silently parsed only the part before it
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: parse_str() Rejects NUL Bytes In The Query String
	:og:type: article
	:og:description: ``parse_str()`` used to accept a query string containing a NUL byte and silently parsed only the part before it
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/parseStrNullByteValueError.html
	:og:locale: en

``parse_str()`` used to accept a query string containing a NUL byte and silently parsed only the part before it. In PHP 8.6, a NUL byte in the ``$string`` argument throws a ``ValueError``.

PHP code
________
.. code-block:: php

   <?php
   
   try {
       parse_str("foo\0bar=1", $result);
       var_dump($result);
   } catch (\ValueError $e) {
       echo $e->getMessage(), "\n";
   }
   
   ?>

Before
______
.. code-block:: output

   array(1) {
     [foo]=>
     string(0) 
   }
   

After
______
.. code-block:: output

   parse_str(): Argument #1 ($string) must not contain any null bytes
   


PHP version change
__________________
This behavior changed in 8.6


See Also
________

* `parse_str() <https://www.php.net/parse_str>`_


Error Messages
______________

  + `parse_str(): Argument #1 ($string) must not contain any null bytes <https://php-errors.readthedocs.io/en/latest/messages/parse_str%28%29%3A-argument-%231-%28%24string%29-must-not-contain-any-null-bytes.html>`_



