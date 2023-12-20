.. _`integer-non-silent-conversion`:

Integer Non-silent Conversion
=============================
When a string is converted into a integer, with problems, the notice was upgraded to a Warning. This raised level may end up filling logs.

PHP code
________
.. code-block:: php

   <?php
   
   print $a = 1 + '3a';
   
   ?>

Before
______
.. code-block:: output

   PHP Notice:  A non well formed numeric value encountered in /codes/intSilentConversion.php on line 4
   
   Notice: A non well formed numeric value encountered in /codes/intSilentConversion.php on line 4
   4

After
______
.. code-block:: output

   PHP Warning:  A non-numeric value encountered in /codes/intSilentConversion.php on line 4
   
   Warning: A non-numeric value encountered in /codes/intSilentConversion.php on line 4
   4


PHP version change
__________________
This behavior changed in 8.0


Error Messages
______________

A non-numeric value encountered


