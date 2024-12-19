.. _`returntype-covariance`:

Returntype Covariance
=====================
PHP 7.4 added the support of return type covariance. The return type of a child class may be more strict than the one of the parent. 



In PHP 7.3, the child method must have the same return type than the parent.



PHP code
________
.. code-block:: php

   <?php
   
   interface i {}
   
   interface j extends i {}
   
   class x {
   	function foo() : i {
   	
   	}
   }
   
   class y extends x {
   	function foo() : j {
   	
   	}
   }
   
   var_dump(new y);
   
   ?>

Before
______
.. code-block:: output

   PHP Fatal error:  Declaration of y::foo(): j must be compatible with x::foo(): i in /codes/covarianceReturntype.php on line 17
   
   Fatal error: Declaration of y::foo(): j must be compatible with x::foo(): i in /codes/covarianceReturntype.php on line 17
   

After
______
.. code-block:: output

   object(y)#1 (0) {
   }
   


PHP version change
__________________
This behavior changed in 7.4


Error Messages
______________

  + `Declaration of y::foo(): j must be compatible with x::foo(): i <https://php-errors.readthedocs.io/en/latest/messages/Declaration+of+y%3A%3Afoo%28%29%3A+j+must+be+compatible+with+x%3A%3Afoo%28%29%3A+i.html>`_



