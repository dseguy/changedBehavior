.. _`compact()-throws-notice-on-missing-variable`:

compact() Throws Notice On Missing Variable
===========================================
.. meta::
	:description:
		compact() Throws Notice On Missing Variable: compact() collects variables in an array.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: compact() Throws Notice On Missing Variable
	:twitter:description: compact() Throws Notice On Missing Variable: compact() collects variables in an array
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: compact() Throws Notice On Missing Variable
	:og:type: article
	:og:description: compact() collects variables in an array
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/compactThrowsNotice.html
	:og:locale: en

compact() collects variables in an array. When trying to compact() variable that don't exist, compact() now emits warnings to signal the missing variables. They might be removed or created.



Invalid variable names, such as numeric values, are also reported.



PHP code
________
.. code-block:: php

   <?php
   
   $name = 'Tobias';
   $age = 28;
   
   // class error, where the variable is confused with its content
   var_dump(compact($name, $age));
   
   // valid usage
   // var_dump(compact("name", 'age'));
   
   ?>

Before
______
.. code-block:: output

   PHP Warning:  compact(): Undefined variable $Tobias
   
   Warning: compact(): Undefined variable $Tobias
   array(0) {
   }
   

After
______
.. code-block:: output

   PHP Warning:  compact(): Undefined variable $Tobias
   
   Warning: compact(): Undefined variable $Tobias
   PHP Warning:  compact(): Argument #2 must be string or array of strings, int given
   
   Warning: compact(): Argument #2 must be string or array of strings, int given
   array(0) {
   }
   


PHP version change
__________________
This behavior changed in 8.1


See Also
________

* `compact() <https://www.php.net/manual/en/function.compact.php>`_


Error Messages
______________

  + `Undefined variable <https://php-errors.readthedocs.io/en/latest/messages/undefined-variable.html>`_


Analyzer
_________

  + `Php/CompactInexistant <https://exakat.readthedocs.io/en/latest/Reference/Rules/Php/CompactInexistant.html>`_



