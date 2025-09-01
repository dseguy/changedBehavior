.. _`length-of-tempnam()-has-been-raised`:

Length Of tempnam() Has Been Raised
===================================
.. meta::
	:description:
		Length Of tempnam() Has Been Raised: The temporary name, provided by ``tempname()`` used to be 6 characters, added to the provided prefix.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Length Of tempnam() Has Been Raised
	:twitter:description: Length Of tempnam() Has Been Raised: The temporary name, provided by ``tempname()`` used to be 6 characters, added to the provided prefix
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Length Of tempnam() Has Been Raised
	:og:type: article
	:og:description: The temporary name, provided by ``tempname()`` used to be 6 characters, added to the provided prefix
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/tempnamLength.html
	:og:locale: en

The temporary name, provided by ``tempname()`` used to be 6 characters, added to the provided prefix. It is now 19 characters, so 13 more characters.



There might be impact on database, if this is stored.

PHP code
________
.. code-block:: php

   <?php
   
   print strlen(tempnam(/tmp, FOO));
   // PHP 8.4+ : /tmp/FOO3u8m0hgq3afe2eSwgTld
   // PHP 8.3- : /tmp/FOO3u8m0h
   
   ?>

Before
______
.. code-block:: output

   22

After
______
.. code-block:: output

   35


PHP version change
__________________
This behavior changed in 8.4



