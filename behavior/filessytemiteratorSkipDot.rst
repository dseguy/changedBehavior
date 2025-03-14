.. _`filessytemiterator-skips-dot-files`:

FilessytemIterator Skips Dot Files
==================================
.. meta::
	:description:
		FilessytemIterator Skips Dot Files: FilessytemIterator class used to list the current directory ``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: FilessytemIterator Skips Dot Files
	:twitter:description: FilessytemIterator Skips Dot Files: FilessytemIterator class used to list the current directory ``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: FilessytemIterator Skips Dot Files
	:og:type: article
	:og:description: FilessytemIterator class used to list the current directory ``
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/filessytemiteratorSkipDot.html
	:og:locale: en

FilessytemIterator class used to list the current directory ``.`` and the parent directory ``..``. Files starting with a dot were and are still listed. 



In PHP 8.2, the dot files are not listed by default. At instantiation time, it is possible to have those file listed by using the FilesystemIterator::SKIP_DOTS option.

PHP code
________
.. code-block:: php

   <?php
   
   // $dir is a path to a folder that contains 2 files:  a.txt and .b 
   $it = new FilesystemIterator(dirname($dir), FilesystemIterator::CURRENT_AS_FILEINFO);
   foreach ($it as $fileinfo) {
       echo $fileinfo->getFilename() . "\n";
   }
   ?>
   

Before
______
.. code-block:: output

   .
   ..
   a.txt
   .b

After
______
.. code-block:: output

   .
   ..
   a.txt
   .b


PHP version change
__________________
This behavior changed in 8.1


See Also
________

* `FilesystemIterator::__construct <\https://www.php.net/manual/en/filesystemiterator.construct.php>`_


