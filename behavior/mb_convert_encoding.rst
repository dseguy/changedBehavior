.. _`mb_convert_encoding()-has-deprecated-formats`:

mb_convert_encoding() Has Deprecated Formats
============================================
.. meta::
	:description:
		mb_convert_encoding() Has Deprecated Formats: 4 previous formats have been removed from ``mb_convert_encoding()`` options: ``uuencode``, ``base64``, ``qprint``, ``html``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: mb_convert_encoding() Has Deprecated Formats
	:twitter:description: mb_convert_encoding() Has Deprecated Formats: 4 previous formats have been removed from ``mb_convert_encoding()`` options: ``uuencode``, ``base64``, ``qprint``, ``html``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: mb_convert_encoding() Has Deprecated Formats
	:og:type: article
	:og:description: 4 previous formats have been removed from ``mb_convert_encoding()`` options: ``uuencode``, ``base64``, ``qprint``, ``html``
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/mb_convert_encoding.html
	:og:locale: en

4 previous formats have been removed from ``mb_convert_encoding()`` options: ``uuencode``, ``base64``, ``qprint``, ``html``. 



They are all handled by dedicated PHP functions, which should be used instead of this one. 

PHP code
________
.. code-block:: php

   <?php
   
   echo mb_convert_encoding('foo', 'uuencode');
   echo mb_convert_encoding('foo', 'base64');
   echo mb_convert_encoding('foo', 'qprint');
   echo mb_convert_encoding('foo', 'html');
   
   ?>

Before
______
.. code-block:: output

   Zm9vfoofoo

After
______
.. code-block:: output

   PHP Deprecated:  mb_convert_encoding(): Handling Uuencode via mbstring is deprecated; use convert_uuencode/convert_uudecode instead 
   
   Deprecated: mb_convert_encoding(): Handling Uuencode via mbstring is deprecated; use convert_uuencode/convert_uudecode instead 
   begin 0644 filename
   #9F]O
   PHP Deprecated:  mb_convert_encoding(): Handling Base64 via mbstring is deprecated; use base64_encode/base64_decode instead 
   
   Deprecated: mb_convert_encoding(): Handling Base64 via mbstring is deprecated; use base64_encode/base64_decode instead 
   Zm9vPHP Deprecated:  mb_convert_encoding(): Handling QPrint via mbstring is deprecated; use quoted_printable_encode/quoted_printable_decode instead 
   
   Deprecated: mb_convert_encoding(): Handling QPrint via mbstring is deprecated; use quoted_printable_encode/quoted_printable_decode instead 
   fooPHP Deprecated:  mb_convert_encoding(): Handling HTML entities via mbstring is deprecated; use htmlspecialchars, htmlentities, or mb_encode_numericentity/mb_decode_numericentity instead 
   
   Deprecated: mb_convert_encoding(): Handling HTML entities via mbstring is deprecated; use htmlspecialchars, htmlentities, or mb_encode_numericentity/mb_decode_numericentity instead 
   foo


PHP version change
__________________
This behavior was deprecated in 8.2

This behavior changed in 8.2



