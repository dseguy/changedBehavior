.. _`setlocale()-does-not-affect-echo-anymore`:

setlocale() Does Not Affect Echo Anymore
========================================
setlocale() used to apply to several functions, including echo. With the French or German (or others) convention, the decimal separator is a comma, and PHP makes the conversion at echo time.



This is not the case anymore in PHP 8.0: anytime the float is converted to a string, the locale formatting is not applied anymore.



It is recommended to make this conversion explicit by using printf(), number_format() or a formatter function.

PHP code
________
.. code-block:: php

   <?php
   
   setlocale(LC_ALL, 'fr_FR.UTF-8');
   
   echo 1003.14;
   
   ?>

Before
______
.. code-block:: output

   1.003,14

After
______
.. code-block:: output

   3.14


PHP version change
__________________
This behavior changed in 8.0


