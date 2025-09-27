.. _`keywords-in-namespace`:

Keywords In Namespace
=====================
.. meta::
	:description:
		Keywords In Namespace: PHP didn't accept its own keywords in the definition of a namespace.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Keywords In Namespace
	:twitter:description: Keywords In Namespace: PHP didn't accept its own keywords in the definition of a namespace
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Keywords In Namespace
	:og:type: article
	:og:description: PHP didn't accept its own keywords in the definition of a namespace
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/keywordInNamespace.html
	:og:locale: en

PHP didn't accept its own keywords in the definition of a namespace. Nowadays, namespaces are parsed as a whole, and there are no keywords in there. Before, the namespaces were parsed bit by bit, and the presence of the keywords was an impediment in that process. 

PHP code
________
.. code-block:: php

   <?php
   namespace a\eval\b;
   echo __NAMESPACE__;
   ?>

Before
______
.. code-block:: output

   syntax error, unexpected token \, expecting {

After
______
.. code-block:: output

   a\eval\b


PHP version change
__________________
This behavior changed in 8.0


Error Messages
______________

  + `0 <https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22--%22%2C-expecting-%22%7B%22.html>`_



