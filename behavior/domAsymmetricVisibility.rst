.. _dom-readonly-properties-use-asymmetric-visibility:

DOM Readonly Properties Use Asymmetric Visibility
=================================================
.. meta::
	:description:
		DOM Readonly Properties Use Asymmetric Visibility: Properties previously documented as readonly, such as ``DOMNode::$nodeType``, ``DOMDocument::$xmlEncoding``, ``DOMEntity::$actualEncoding``, ``$encoding`` and ``$version``, are now declared with asymmetric visibility (``public private(set)``).
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: DOM Readonly Properties Use Asymmetric Visibility
	:twitter:description: DOM Readonly Properties Use Asymmetric Visibility: Properties previously documented as readonly, such as ``DOMNode::$nodeType``, ``DOMDocument::$xmlEncoding``, ``DOMEntity::$actualEncoding``, ``$encoding`` and ``$version``, are now declared with asymmetric visibility (``public private(set)``)
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: DOM Readonly Properties Use Asymmetric Visibility
	:og:type: article
	:og:description: Properties previously documented as readonly, such as ``DOMNode::$nodeType``, ``DOMDocument::$xmlEncoding``, ``DOMEntity::$actualEncoding``, ``$encoding`` and ``$version``, are now declared with asymmetric visibility (``public private(set)``)
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/domAsymmetricVisibility.html
	:og:locale: en

Properties previously documented as readonly, such as ``DOMNode::$nodeType``, ``DOMDocument::$xmlEncoding``, ``DOMEntity::$actualEncoding``, ``$encoding`` and ``$version``, are now declared with asymmetric visibility (``public private(set)``). Writing to them from outside the class still fails, but the error message and its wording changed.

PHP code
________
.. code-block:: php

   <?php
   
   $doc = new DOMDocument();
   $doc->loadXML('<root/>');
   
   try {
       $doc->xmlEncoding = 'UTF-8';
   } catch (\Error $e) {
       echo get_class($e), ': ', $e->getMessage(), "\n";
   }
   
   ?>

Before
______
.. code-block:: output

   Error: Cannot modify readonly property DOMDocument::$xmlEncoding
   

After
______
.. code-block:: output

   Error: Cannot modify private(set) property DOMDocument::$xmlEncoding from global scope
   


PHP version change
__________________
This behavior changed in 8.6


See Also
________

* `DOMDocument <https://www.php.net/manual/en/class.domdocument.php>`_



