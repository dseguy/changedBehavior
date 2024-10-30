.. _`new-cases-in-switch`:

New Cases In Switch
===================
With PHP 8.0, the result of comparisons between empty values, such as 0, ``''`` (empty string), or ``[]`` (empty array), have changed. The impact is obvious with the ``==`` operator, and it is less obvious with ``switch``, which relies on the same underlying code.



In particular, when there are several falsy cases in a switch, the selection of cases may be different between PHP versions, like in this illustration. 



In PHP 7.4 and older, ``0 == ''``, so the first case is selected. After PHP 8.0, ``0 != ''``, and the second case is selected. 



PHP code
________
.. code-block:: php

   <?php
   
   foreach([0, '', null, []] as $a )
   	switch($a) {
   		case 0;
   			print Zero\n;
   			break;
   			
   		case '':
   			print Empty string\n;
   			break;
   			
   		case []:
   			print []\n;
   			break;
   	}
   
   ?>

Before
______
.. code-block:: output

   Zero
   Zero
   Zero
   []
   

After
______
.. code-block:: output

   Zero
   Empty string
   Zero
   []
   


PHP version change
__________________
This behavior changed in 8.0


