.. _`compact()-throws-notice-on-missing-variable`:

compact() Throws Notice On Missing Variable
===========================================
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
   
   

Before
______
.. code-block:: output

   PHP Warning:  compact(): Undefined variable $Tobias in /Users/famille/Desktop/changedBehavior/codes/compactThrowsNotice.php on line 7
   
   Warning: compact(): Undefined variable $Tobias in /Users/famille/Desktop/changedBehavior/codes/compactThrowsNotice.php on line 7
   array(0) {
   }
   

After
______
.. code-block:: output

   PHP Warning:  compact(): Undefined variable $Tobias in /Users/famille/Desktop/changedBehavior/codes/compactThrowsNotice.php on line 7
   
   Warning: compact(): Undefined variable $Tobias in /Users/famille/Desktop/changedBehavior/codes/compactThrowsNotice.php on line 7
   PHP Warning:  compact(): Argument #2 must be string or array of strings, int given in /Users/famille/Desktop/changedBehavior/codes/compactThrowsNotice.php on line 7
   
   Warning: compact(): Argument #2 must be string or array of strings, int given in /Users/famille/Desktop/changedBehavior/codes/compactThrowsNotice.php on line 7
   array(0) {
   }
   


PHP version change: 8.1

See Also
________

* `\"compact()\" <\https://www.php.net/manual/en/function.compact.php>`_

Error Messages
______________

Undefined variable $x


