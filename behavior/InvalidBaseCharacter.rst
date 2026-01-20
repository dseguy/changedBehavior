.. _`base-conversion-reports-invalid-characters`:

Base Conversion Reports Invalid Characters
==========================================
.. meta::
	:description:
		Base Conversion Reports Invalid Characters: The base conversion functions, such as octdec(), base_convert(), binhex() or hexdex() used to ignore silently invalid characters.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Base Conversion Reports Invalid Characters
	:twitter:description: Base Conversion Reports Invalid Characters: The base conversion functions, such as octdec(), base_convert(), binhex() or hexdex() used to ignore silently invalid characters
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Base Conversion Reports Invalid Characters
	:og:type: article
	:og:description: The base conversion functions, such as octdec(), base_convert(), binhex() or hexdex() used to ignore silently invalid characters
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/InvalidBaseCharacter.html
	:og:locale: en

The base conversion functions, such as octdec(), base_convert(), binhex() or hexdex() used to ignore silently invalid characters. Invalid characters are the characters that do no belong to the base: for example, 2 or 3 in binary, or a in decimal, or g in hexadecimal.



The characters are still ignored, but they now raise a warning.



PHP code
________
.. code-block:: php

   <?php
   
   print octdec('789');
   print base_convert('123', 2, 10);
   print bindec('a10');
   print hexdec('defg');
   
   ?>

Before
______
.. code-block:: output

   7123567

After
______
.. code-block:: output

   PHP Deprecated:  Invalid characters passed for attempted conversion, these have been ignored
   
   Deprecated: Invalid characters passed for attempted conversion, these have been ignored
   7PHP Deprecated:  Invalid characters passed for attempted conversion, these have been ignored
   
   Deprecated: Invalid characters passed for attempted conversion, these have been ignored
   1PHP Deprecated:  Invalid characters passed for attempted conversion, these have been ignored
   
   Deprecated: Invalid characters passed for attempted conversion, these have been ignored
   2PHP Deprecated:  Invalid characters passed for attempted conversion, these have been ignored
   
   Deprecated: Invalid characters passed for attempted conversion, these have been ignored
   3567


PHP version change
__________________
This behavior changed in 7.4


Error Messages
______________

  + `Invalid characters passed for attempted conversion, these have been ignored <https://php-errors.readthedocs.io/en/latest/messages/invalid-characters-passed-for-attempted-conversion%2C-these-have-been-ignored.html>`_



