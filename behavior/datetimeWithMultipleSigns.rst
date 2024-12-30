.. _`datetime-with-multiple-signs`:

datetime With Multiple Signs
============================
There can be only one sign character, when instantiating a DateTime object. 



Until PHP 8.2, it was possible, though confusing, to use multiple sign ``+`` and ``-``. This is considered a bad practice.



PHP code
________
.. code-block:: php

   <?php
   $time = new \DateTimeImmutable("-+-1 year");
   
   echo $time->format('Y/m/d H:i:s'), "\n";
   ?>

Before
______
.. code-block:: output

   2024/10/18 10:15:30

After
______
.. code-block:: output

   2022/10/18 10:15:30


PHP version change
__________________
This behavior changed in 8.2


