.. _`file_get_contents()-needs-a-real-path`:

file_get_contents() Needs A Real Path
=====================================
file_get_contents() cannot work on an empty string. Until PHP 8.0, it would report it as a warning, and return false, keeping the execution. In PHP 8.0, it is now a Fatal error.

PHP code
________
.. code-block:: php

   <?php
   
   var_dump(file_get_contents());
   
   ?>

Before
______
.. code-block:: output

   PHP Warning:  file_get_contents(): Filename cannot be empty in /codes/file_get_contents.php on line 3
   
   Warning: file_get_contents(): Filename cannot be empty in /codes/file_get_contents.php on line 3
   bool(false)
   

After
______
.. code-block:: output

   PHP Fatal error:  Uncaught ValueError: Path cannot be empty in /codes/file_get_contents.php:3
   Stack trace:
   #0 /codes/file_get_contents.php(3): file_get_contents('')
   #1 {main}
     thrown in /codes/file_get_contents.php on line 3
   
   Fatal error: Uncaught ValueError: Path cannot be empty in /codes/file_get_contents.php:3
   Stack trace:
   #0 /codes/file_get_contents.php(3): file_get_contents('')
   #1 {main}
     thrown in /codes/file_get_contents.php on line 3
   


PHP version change
__________________
This behavior changed in 8.0


Error Messages
______________

  + `file_get_contents(): Filename cannot be empty <https://php-errors.readthedocs.io/en/latest/messages/file_get_contents%28%29%3A+Filename+cannot+be+empty.html>`_



