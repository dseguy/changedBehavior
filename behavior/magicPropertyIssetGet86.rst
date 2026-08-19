.. _isset()-materialized-magic-property-skips-__get():

isset()-Materialized Magic Property Skips __get()
=================================================
.. meta::
	:description:
		isset()-Materialized Magic Property Skips __get(): ``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: isset()-Materialized Magic Property Skips __get()
	:twitter:description: isset()-Materialized Magic Property Skips __get(): ``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: isset()-Materialized Magic Property Skips __get()
	:og:type: article
	:og:description: ``
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/magicPropertyIssetGet86.html
	:og:locale: en

``??`` and ``empty()`` on an inaccessible property call ``__isset()`` first. If ``__isset()`` materializes the property -- by writing directly into the object's property table, for example ``$this->$name = ...`` -- PHP 8.6 returns that freshly-written value directly instead of calling ``__get()`` afterwards. Until PHP 8.6, ``__get()`` was still called even though the property now exists, and its return value was used instead of the value ``__isset()`` had just written. Plain ``isset()`` is unaffected by this change.

PHP code
________
.. code-block:: php

   <?php
   
   #[AllowDynamicProperties]
   class Magic {
       public function __isset($name) {
           echo "__isset($name) called\n";
           $this->$name = 'materialized-by-isset';
           return true;
       }
       public function __get($name) {
           echo "__get($name) called\n";
           return 'from __get';
       }
   }
   
   $m = new Magic();
   var_dump($m->x ?? 'default');
   
   ?>
   

Before
______
.. code-block:: output

   __isset(x) called
   __get(x) called
   string(10) "from __get" 
   

After
______
.. code-block:: output

   __isset(x) called
   string(21) "materialized-by-isset" 
   


PHP version change
__________________
This behavior changed in 8.6


See Also
________

* `PHP 8.6 UPGRADING <https://github.com/php/php-src/blob/master/UPGRADING>`_



