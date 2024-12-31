.. _`new-cases-in-switch`:

New Cases In Switch
===================
.. meta::
	:description:
		New Cases In Switch: With PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: New Cases In Switch
	:twitter:description: New Cases In Switch: With PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: New Cases In Switch
	:og:type: article
	:og:description: With PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/newCasesInSwitch.html
	:og:locale: en

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


