.. _`datetimewithmultiplesigns`:

datetimeWithMultipleSigns
=========================


PHP code
________
.. code-block:: php

   <?php
   $time = new \DateTimeImmutable(-+-1 year);
   
   echo $time->format('Y/m/d H:i:s'), \n;
   ?>

Before
______
.. code-block:: output

   2024/10/18 10:15:30

After
______
.. code-block:: output

   2022/10/18 10:15:30


PHP version change: 8.2

