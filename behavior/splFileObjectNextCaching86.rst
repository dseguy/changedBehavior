.. _splfileobject::next()-always-advances-the-stream:

SplFileObject::next() Always Advances The Stream
================================================
.. meta::
	:description:
		SplFileObject::next() Always Advances The Stream: ``SplFileObject::next()`` used to only advance to the next line when a prior ``current()`` call had already cached a line internally.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: SplFileObject::next() Always Advances The Stream
	:twitter:description: SplFileObject::next() Always Advances The Stream: ``SplFileObject::next()`` used to only advance to the next line when a prior ``current()`` call had already cached a line internally
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: SplFileObject::next() Always Advances The Stream
	:og:type: article
	:og:description: ``SplFileObject::next()`` used to only advance to the next line when a prior ``current()`` call had already cached a line internally
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/splFileObjectNextCaching86.html
	:og:locale: en

``SplFileObject::next()`` used to only advance to the next line when a prior ``current()`` call had already cached a line internally; without that cache, ``next()`` was a no-op and the following ``current()`` call re-read the same line. In PHP 8.6, ``next()`` unconditionally advances the underlying stream, so a subsequent ``current()`` call always returns the line after the one that was current before ``next()`` was called.

PHP code
________
.. code-block:: php

   <?php
   
   $path = tempnam(sys_get_temp_dir(), 'spl');
   file_put_contents($path, "line1\nline2\nline3\n");
   
   $f = new SplFileObject($path);
   $f->next();
   var_dump(trim($f->current()));
   
   unlink($path);
   
   ?>
   

Before
______
.. code-block:: output

   string(5) "line1" 
   

After
______
.. code-block:: output

   string(5) "line2" 
   


PHP version change
__________________
This behavior changed in 8.6


See Also
________

* `SplFileObject::next() <https://www.php.net/splfileobject.next>`_



