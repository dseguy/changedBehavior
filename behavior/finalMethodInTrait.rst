.. _`final-method-in-trait`:

Final Method In Trait
=====================
.. meta::
	:description:
		Final Method In Trait: Trait methods can be named final, when importing them as a trait alias.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Final Method In Trait
	:twitter:description: Final Method In Trait: Trait methods can be named final, when importing them as a trait alias
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Final Method In Trait
	:og:type: article
	:og:description: Trait methods can be named final, when importing them as a trait alias
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/finalMethodInTrait.html
	:og:locale: en

Trait methods can be named final, when importing them as a trait alias. It was explicitly forbidden until PHP 8.3. This has nothing to do with the final keyword.

PHP code
________
.. code-block:: php

   <?php
   
   trait t {
       function foo() {}
   }
   
   trait t2 {
       function foo() {}
   }
   
   class A {
           use t, t2 { t::foo as final; }
   }
   ?>

Before
______
.. code-block:: output

   

After
______
.. code-block:: output

   


PHP version change
__________________
This behavior changed in 8.3


Analyzer
_________

  + `Traits/NoFinalAlias <https://exakat.readthedocs.io/en/latest/Reference/Rules/Traits/NoFinalAlias.html>`_



