.. _`base-conversion-reports-invalid-characters`:

Base Conversion Reports Invalid Characters
==========================================
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

   PHP Deprecated:  Invalid characters passed for attempted conversion, these have been ignored in /codes/InvalidBaseCharacter.php on line 3
   
   Deprecated: Invalid characters passed for attempted conversion, these have been ignored in /codes/InvalidBaseCharacter.php on line 3
   7PHP Deprecated:  Invalid characters passed for attempted conversion, these have been ignored in /codes/InvalidBaseCharacter.php on line 4
   
   Deprecated: Invalid characters passed for attempted conversion, these have been ignored in /codes/InvalidBaseCharacter.php on line 4
   1PHP Deprecated:  Invalid characters passed for attempted conversion, these have been ignored in /codes/InvalidBaseCharacter.php on line 5
   
   Deprecated: Invalid characters passed for attempted conversion, these have been ignored in /codes/InvalidBaseCharacter.php on line 5
   2PHP Deprecated:  Invalid characters passed for attempted conversion, these have been ignored in /codes/InvalidBaseCharacter.php on line 6
   
   Deprecated: Invalid characters passed for attempted conversion, these have been ignored in /codes/InvalidBaseCharacter.php on line 6
   3567


PHP version change
__________________
This behavior changed in 7.4


Error Messages
______________

  + `Invalid characters passed for attempted conversion, these have been ignored <https://php-errors.readthedocs.io/en/latest/messages/invalid-characters-passed-for-attempted-conversion%2C-these-have-been-ignored.html>`_



