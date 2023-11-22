PHP changed behaviors
----------------------

.. _`accessing-trait-resources-directly-is-not-allowed`:

Accessing Trait Resources Directly Is Not Allowed
=================================================
It is not possible anymore to use traits just like a standalone class. As such, accessing methods, properties (and later constants) directly on the trait is not allowed anymore in PHP 8.1 and later. The feature might be removed in PHP 9.0.

Only static resources were accessible via the trait, as it is not possible to instantiate a trait without a class. 

PHP code
________
.. code-block:: php

   <?php
   
   trait t {
           static function foo() { print __METHOD__;}
           static $x = 'A';
   }
   
   echo T::foo();
   echo T::$x;
   
   ?>

Before
______
.. code-block:: output

   t::fooA

After
______
.. code-block:: output

   PHP Deprecated:  Calling static trait method t::foo is deprecated, it should only be called on a class using the trait in /Users/famille/Desktop/changedBehavior/codes/accessTraitsDirectly.php on line 8
   
   Deprecated: Calling static trait method t::foo is deprecated, it should only be called on a class using the trait in /Users/famille/Desktop/changedBehavior/codes/accessTraitsDirectly.php on line 8
   t::fooPHP Deprecated:  Accessing static trait property t::$x is deprecated, it should only be accessed on a class using the trait in /Users/famille/Desktop/changedBehavior/codes/accessTraitsDirectly.php on line 9
   
   Deprecated: Accessing static trait property t::$x is deprecated, it should only be accessed on a class using the trait in /Users/famille/Desktop/changedBehavior/codes/accessTraitsDirectly.php on line 9
   A


PHP version change: 9.0

----



.. _`array_key_exists()-doesn't-work-on-objects`:

array_key_exists() doesn't work on objects
==========================================
array_key_exists() used to accept arrays or objects and work on them indistinctly. 

PHP code
________
.. code-block:: php

   <?php
   var_dump(array_key_exists('a', (object) ['a' => 1]));
   ?>

Before
______
.. code-block:: output

   true

After
______
.. code-block:: output

   Fatal error


PHP version change: 8.0

----



.. _`negative-automatic-index-from-empty-array`:

Negative Automatic Index From Empty Array
=========================================
When starting from an empty array and assigning an initial negative integer index, PHP used to continue assigning indices with 0, instead of the following negative number. It is fixed in PHP 8.3.

PHP code
________
.. code-block:: php

   <?php
   
   $array = [];
   $array[-2] = 'a';
   $array[] = 'b';
   
   print_r($array);
   
   ?>

Before
______
.. code-block:: output

   Array
   (
       [-2] => a
       [0] => b
   )
   

After
______
.. code-block:: output

   Array
   (
       [-2] => a
       [-1] => b
   )
   


PHP version change: 8.3

----



.. _`automatic-index-in-non-empty-array`:

Automatic Index In Non Empty Array
==================================
When starting from an array whose maximum key is integer and negative, PHP used to continue assigning indices with 0, instead of the following negative number. It is fixed in PHP 8.0.

PHP code
________
.. code-block:: php

   <?php
   
   $array = [
       -10 => 'a',
   ];
   $array[] = 'b';
   
   print_r($array);
   
   ?>

Before
______
.. code-block:: output

   Array
   (
       [-10] => a
       [0] => b
   )
   

After
______
.. code-block:: output

   Array
   (
       [-10] => a
       [-9] => b
   )
   


PHP version change: 8.0

----



.. _`array_product()-new-checks`:

array_product() New Checks
==========================
array_product() used to cast the arguments to integers before executing the multiplications. Nowadays, the strange types raise a warning, as illustrated here with the array. 

PHP code
________
.. code-block:: php

   <?php
   
   print array_product([1, true, []]);
   
   ?>

Before
______
.. code-block:: output

   1

After
______
.. code-block:: output

   PHP Warning:  array_product(): Multiplication is not supported on type array in /Users/famille/Desktop/changedBehavior/codes/arrayProdChecks.php on line 3
   
   Warning: array_product(): Multiplication is not supported on type array in /Users/famille/Desktop/changedBehavior/codes/arrayProdChecks.php on line 3
   1


PHP version change: 8.3

----



.. _`array_sum()-checks-operands-more-thoroughly`:

array_sum() Checks Operands More Thoroughly
===========================================
array_sum() used to cast the arguments to integers before executing the additions. Nowadays, the strange types raise a warning, as illustrated here with the array. 

PHP code
________
.. code-block:: php

   <?php
   
   print array_sum([1, false, []]);
   
   ?>

Before
______
.. code-block:: output

   1

After
______
.. code-block:: output

   PHP Warning:  array_sum(): Addition is not supported on type array in /Users/famille/Desktop/changedBehavior/codes/arraySumChecks.php on line 3
   
   Warning: array_sum(): Addition is not supported on type array in /Users/famille/Desktop/changedBehavior/codes/arraySumChecks.php on line 3
   1


PHP version change: 8.3

* `A Comprehensive Guide to PHP\'s `array_sum()` Function <<https://reintech.io/blog/a-comprehensive-guide-to-phps-array-sum-function>`_


----



.. _`assert()-throws-exception`:

assert() Throws Exception
=========================
assert() is the PHP native implementation of assertions. Until PHP 8.0, it would raise an error, while now, it throws an exception.

PHP code
________
.. code-block:: php

   <?php
   // error handler function
   function myErrorHandler($errno, $errstr, $errfile, $errline)
   {
           print __METHOD__;
   
       return true;
   }
   
   set_error_handler('myErrorHandler');
   
   try {
           assert(false);
   } catch (\Error $e) {
           print $e->getMessage();
   }
   
   ?>

Before
______
.. code-block:: output

   myErrorHandler

After
______
.. code-block:: output

   assert(false)


PHP version change: 8.0

----



.. _`bitshift-and-concat-precedence`:

Bitshift And Concat Precedence
==============================
<< and >> and . (dot) operators used to have the same priority. Thus, they used to be processed one after the other, from left to right. 



In PHP 8.0, the bitshift has now the highest precedence, and will happen before the concatenation.

PHP code
________
.. code-block:: php

   <?php
   
   echo 35 << 1 . '.' . 0 + 5;
   
   ?>

Before
______
.. code-block:: output

   70.5

After
______
.. code-block:: output

   2240


PHP version change: 8.0

----



.. _`cannot-call-traits-methods-directly`:

Cannot Call Traits Methods Directly
===================================
Traits used to be called directly, like a class. In PHP 8.1, this feature has been removed. The methods, properties or constants of the trait must be called in the context of their host class.

PHP code
________
.. code-block:: php

   <?php
   
   trait t {
       static function foo() { echo __METHOD__; }
       
   }
   
   echo t::foo();

Before
______
.. code-block:: output

   t::foo

After
______
.. code-block:: output

   PHP Deprecated:  Calling static trait method t::foo is deprecated, it should only be called on a class using the trait in /Users/famille/Desktop/changedBehavior/codes/callTraitAlone.php on line 8
   
   Deprecated: Calling static trait method t::foo is deprecated, it should only be called on a class using the trait in /Users/famille/Desktop/changedBehavior/codes/callTraitAlone.php on line 8
   t::foo


PHP version change: 9.0

----



.. _`catch-without-variable`:

Catch Without Variable
======================
A catch clause doesn't require a storing variable anymore. It may simply omit it. The exception is then caught, but not provided in the clause.

PHP code
________
.. code-block:: php

   <?php
   
   try {
       throw new Exception('Error');
   } catch (Exception) {
       print 'Exception caught';
   }
   
   ?>

Before
______
.. code-block:: output

   Parse error: syntax error, unexpected ')', expecting '|' or variable (T_VARIABLE)

After
______
.. code-block:: output

   Exception caught


PHP version change: 8.0

----



.. _`class_alias()-works-on-internal-classes`:

class_alias() Works On Internal Classes
=======================================
class_alias() makes an alias for a class, an enumeration, an interface or a trait. Until PHP 8.3, it was only possible on custom structures.

PHP code
________
.. code-block:: php

   <?php
   
   class_alias(stdClass::class, A::class);
   
   var_dump(new A);

Before
______
.. code-block:: output

   First argument of class_alias() must be a name of user defined class

After
______
.. code-block:: output

   object(stdClass)#1 (0) {
   }


PHP version change: 8.3

* `class_alias() <https://php.net/class_alias>`_


----



.. _`interface-imported-constant-visibility-is-checked`:

Interface Imported Constant Visibility Is Checked
=================================================
Constant and methods visibility must be public when they are defined in an interface. When they are implemented in a class, they also need to be public. Until PHP 8.3, this was silently ignored, and made public. 

PHP code
________
.. code-block:: php

   <?php
   
   interface i {
       public const IPrivate   = 'private';
       public const IProtected = 'protected';
       public const IPublic    = 'public';
   }
   
   class x implements i {
       private const IPri = 1;
       protected const IPro = 2;
       public const IPub = 3;
   }
   
   echo x::IPrivate . PHP_EOL;
   echo x::IProtected . PHP_EOL;
   echo x::IPublic . PHP_EOL;
   
   ?>
   

Before
______
.. code-block:: output

   3

After
______
.. code-block:: output

   PHP Fatal error:  Access level to x::IPri must be public (as in interface i)


PHP version change: 8.3

----



.. _`constantintrait`:

ConstantInTrait
===============
Trait can have constants in PHP 8.3 and later.

PHP code
________
.. code-block:: php

   <?php
   
   trait t {
       const X = 1;
       
   }
   
   class x {
   	use t;
   }
   
   echo X::X;

Before
______
.. code-block:: output

   PHP Fatal error:  Traits cannot have constants

After
______
.. code-block:: output

   1


PHP version change: 8.3

----



.. _`datetimewithmultiplesigns`:

datetimeWithMultipleSigns
=========================


PHP code
________
.. code-block:: php

   <?php
   $time = new \DateTimeImmutable(-+-1 year);
   
   echo $time->format('Y/m/d H:i:s'), \n;
   ?>

Before
______
.. code-block:: output

   2024/10/18 10:15:30

After
______
.. code-block:: output

   2022/10/18 10:15:30


PHP version change: 8.2

----



.. _`dot-and-bitshift-priority`:

dot And Bitshift Priority
=========================
The dot (concatenation) and bitshift (<< and >>) operators have a distinct priority in PHP 

PHP code
________
.. code-block:: php

   <?php
   echo 3 . 4 << 1;
   ?>

Before
______
.. code-block:: output

   68

After
______
.. code-block:: output

   38


PHP version change: 8.0

* `Other incompatible Changes <https://www.php.net/manual/en/migration80.incompatible.php>`_
* `Bitwise Operators <https://www.php.net/manual/en/language.operators.bitwise.php>`_


----



.. _`duplicate-static-definition`:

Duplicate Static Definition
===========================
PHP reports when the same static variable has been declared twice in the same context.

PHP code
________
.. code-block:: php

   <?php
   
   namespace a { 
   	function foo() {
           static $s;
           $s = 1;
   
           static $s;
           echo $s;
       }
   }

Before
______
.. code-block:: output

   11

After
______
.. code-block:: output

   Duplicate declaration of static variable $s


PHP version change: 8.3

----



.. _`dynamic-class-constant`:

Dynamic Class Constant
======================
To access a constant value with its name in a string, one required the constant() function. ``constant('\A::'.$constantName)``.



In PHP 8.3, there is a dedicated syntax, to access those constants dynamically. 



PHP code
________
.. code-block:: php

   <?php
   
   class a {
   	public const A = 1;
   }
   
   $b = 'A';
   
   echo A::{$b};
   
   ?>

Before
______
.. code-block:: output

   PHP Parse error:  syntax error

After
______
.. code-block:: output

   1


PHP version change: 8.3

----



.. _`no-dynamic-properties-by-default`:

No Dynamic Properties By Default
================================
Properties never required a definition before usage, just like variables. They could be added at any moment in any object. 



In PHP 8.2, this is now a deprecated behavior. The property must be declared before usage. Visibility, type and default value are optional as before, so the requirement is to add the property in the class. 



It is also possible to skip that warning by extending explicitly the stdClass; by adding the #[AllowDynamicProperties] attribute or by creating the magic property method __get or __set, depending on the usage.



PHP code
________
.. code-block:: php

   <?php
   
   class x {} 
   
   $x = new x;
   $x->property = 1; 
   echo $x->property;
   
   ?>

Before
______
.. code-block:: output

   1

After
______
.. code-block:: output

   PHP Deprecated:  Creation of dynamic property x::$p is deprecated in /Users/famille/Desktop/changedBehavior/codes/dynamicProperties.php on line 6
   
   Deprecated: Creation of dynamic property x::$p is deprecated in /Users/famille/Desktop/changedBehavior/codes/dynamicProperties.php on line 6
   1


PHP version change: 9.0

* `PHP 8.2: Dynamic Properties are deprecated <https://php.watch/versions/8.2/dynamic-properties-deprecated>`_


----



.. _`cannot-explode()-null`:

Cannot Explode() Null
=====================
Null used to be a valid argument for explode(), used as an empty string. Nowadays, PHP requires an actual string to explode.

PHP code
________
.. code-block:: php

   <?php
   
   var_dump(explode(';', null));
   
   ?>

Before
______
.. code-block:: output

   array(1) {
     [0]=>
     string(0) 
   }
   

After
______
.. code-block:: output

   PHP Deprecated:  explode(): Passing null to parameter #2 ($string) of type string is deprecated in /Users/famille/Desktop/changedBehavior/codes/explodeWithNull.php on line 3
   
   Deprecated: explode(): Passing null to parameter #2 ($string) of type string is deprecated in /Users/famille/Desktop/changedBehavior/codes/explodeWithNull.php on line 3
   array(1) {
     [0]=>
     string(0) 
   }
   


PHP version change: 8.1

----



.. _`filessytemiterator-skips-dot-files`:

FilessytemIterator Skips Dot Files
==================================
FilessytemIterator class used to list the current directory ``.`` and the parent directory ``..``. Files starting with a dot were and are still listed. 



In PHP 8.2, the dot files are not listed by default. At instantiation time, it is possible to have those file listed by using the FilesystemIterator::SKIP_DOTS option.

PHP code
________
.. code-block:: php

   <?php
   
   // $dir is a path to a folder that contains 2 files:  a.txt and .b 
   $it = new FilesystemIterator(dirname($dir), FilesystemIterator::CURRENT_AS_FILEINFO);
   foreach ($it as $fileinfo) {
       echo $fileinfo->getFilename() . \n;
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


PHP version change: 8.1

* `FilesystemIterator::__construct <https://www.php.net/manual/en/filesystemiterator.construct.php>`_


----



.. _`final-class-constants`:

Final Class Constants
=====================
Class constants can be made final, starting with PHP 8.2.

PHP code
________
.. code-block:: php

   <?php
   
   class x {
   	final public const A = 1;
   }
   
   echo x::A;
   
   ?>

Before
______
.. code-block:: output

   PHP Fatal error:  Cannot use 'final' as constant modifier 

After
______
.. code-block:: output

   1


PHP version change: 8.1

----



.. _`final-method-in-trait`:

Final Method In Trait
=====================
Trait methods can be named final, when importing them as a trait alias. It was explicitely forbidden until PHP 8.3. This has nothing to do with the final keyword.

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

   


PHP version change: 8.3

----



.. _`get_class()-needs-an-argument`:

get_class() Needs An Argument
=============================
get_class() had a default behavior, where the current class would be returned when get_class() is called without argumnts. This is now deprecated.



It is also deprecated for get_parent_class(). 

PHP code
________
.. code-block:: php

   <?php
   
   class x {
           function foo() {
                   echo get_class();
                   echo get_parent_class();
           }
   }
   
   (new x)->foo();
   
   ?>

Before
______
.. code-block:: output

   x

After
______
.. code-block:: output

   Calling get_class() without arguments is deprecated


PHP version change: 9.0

----



.. _`$globals-assignement`:

$GLOBALS Assignement
====================
It is not possible to assign the ``$GLOBALS`` variable anymore. The individual values may still be assigned directly. 

PHP code
________
.. code-block:: php

   <?php
   
   $GLOBALS['a']  = 1;
   
   $b = &$GLOBALS;
   $b = array();
   
   print_r($GLOBALS);
   
   ?>

Before
______
.. code-block:: output

   Array
   (
   )
   

After
______
.. code-block:: output

   PHP Fatal error:  Cannot acquire reference to $GLOBALS


PHP version change: 8.1

----



.. _`instanceof-expect-objects`:

instanceof Expect Objects
=========================
PHP used to report a fatal error when provided with a value that is not an object. After PHP 7.3, it would return false in such case, and not break the execution.

PHP code
________
.. code-block:: php

   <?php
   
   var_dump(null instanceof Countable);
   
   ?>

Before
______
.. code-block:: output

   PHP Fatal error:  instanceof expects an object instance, constant given in /Users/famille/Desktop/changedBehavior/codes/instanceofExpectObjects.php on line 3
   
   Fatal error: instanceof expects an object instance, constant given in /Users/famille/Desktop/changedBehavior/codes/instanceofExpectObjects.php on line 3
   

After
______
.. code-block:: output

   bool(false)
   


PHP version change: 7.3

* `Type Operator <https://www.php.net/manual/en/language.operators.type.php#language.operators.type>`_


----



.. _`interface-constant-visibility-checks`:

Interface Constant Visibility Checks
====================================
PHP checks if the visibility of constants that are also part of an interface are all public. If the class constant, in the class, is not public, it is a Fatal Error. This was not checked until PHP 8.3.

PHP code
________
.. code-block:: php

   <?php
   
   interface i {
           public const I = 1;
           public const J = 2;
   }
   
   class x implements i {
           private const I = 1;
           public const J = 2;
   }
   
   print x::J;
   print x::I;
   ?>

Before
______
.. code-block:: output

   Cannot access private constant x::I

After
______
.. code-block:: output

   Access level to x::I must be public (as in interface i)


PHP version change: 8.3

----



.. _`interpolated-string-dereferencing`:

Interpolated String Dereferencing
=================================
Until PHP 8, it was possible to use a string as a variable for an array, or an object, and access, respectively, index, properties or methods. It was not possible for interpolated strings, which are strings that include another string. 



In PHP 8, this is now possible.

PHP code
________
.. code-block:: php

   <?php
   
   $bar = "abc";
   
   echo "foo$bar"[0];
   echo PHP_EOL
   echo "foo$bar"::foo();
   
   class fooabc{
       static function foo() {
           print __METHOD__;
       }
   }
   
   ?>

Before
______
.. code-block:: output

   PHP Parse error:  syntax error, unexpected '[', expecting ';' or ',' 

After
______
.. code-block:: output

   f
   fooabc::foo


PHP version change: 8.0

* `PHP RFC: Arbitrary string interpolation <https://wiki.php.net/rfc/arbitrary_string_interpolation>`_


----



.. _`iterator_count()-also-count-arrays`:

iterator_count() Also Count Arrays
==================================
The PHP native function used to accept only iterators. Since PHP 8.1, arrays are also welcomed. 

PHP code
________
.. code-block:: php

   <?php
   
   print iterator_count([1,2,3]);
   
   ?>

Before
______
.. code-block:: output

   Uncaught TypeError: iterator_count(): Argument #1 ($iterator) must be of type Traversable, array given

After
______
.. code-block:: output

   3


PHP version change: 8.2

----



.. _`keywords-in-namespace`:

Keywords In Namespace
=====================
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

   Error

After
______
.. code-block:: output

   a\eval\b


PHP version change: 8.0

----



.. _`ksort()-places-integers-before-strings-in-keys`:

ksort() Places Integers Before Strings In Keys
==============================================
ksort() used the PHP 7 way to compare values: then, strings would rank below integers, in particular below 0. 



In PHP 8, strings are now ranking above integers, and are moved to the end of the sorted array. This is related to the change of rules in comparisons.

PHP code
________
.. code-block:: php

   <?php
   
   $x = array('a' => 1, 
   		   0 => 2, 
   		   1 => 3, 
   		   '0' => 4,
   );
   ksort($x);
   print_r($x);

Before
______
.. code-block:: output

   Array
   (
       [a] => 1
       [0] => 4
       [1] => 3
   )
   

After
______
.. code-block:: output

   Array
   (
       [0] => 4
       [1] => 3
       [a] => 1
   )
   


PHP version change: 8.0

----



.. _`ksort()-now-places-integers-before-strings`:

ksort() Now Places Integers Before Strings
==========================================
ksort() used the PHP 7 way to compare values: then, strings would rank below integers, in particular below 0. 



In PHP 8, strings are now ranking above integers, and are moved to the end of the sorted array. This is related to the change of rules in comparisons.

PHP code
________
.. code-block:: php

   <?php
   
   $x = array('a' => 1, 
              0 => 2, 
              1 => 3, 
              '0' => 4,
   );
   ksort($x);
   print_r($x);
   ?>

Before
______
.. code-block:: output

   Array
   (
       [a] => 1
       [0] => 4
       [1] => 3
   )
   

After
______
.. code-block:: output

   Array
   (
       [0] => 4
       [1] => 3
       [a] => 1
   )
   


PHP version change: 8.0

----



.. _`no-reference-to-$globals-variable`:

No Reference To $GLOBALS Variable
=================================
Since PHP 8.2, it is not possible anymore to create a reference to the $GLOBALS variable. It prevents any unexpected updates to this array.



It is still possible to make a reference to any of the element of that array, individually.



PHP code
________
.. code-block:: php

   <?PHP
   
   $b = &$GLOBALS;
   
   print_r($b);
   
   ?>

Before
______
.. code-block:: output

   Array
   (
       [_GET] => Array
           (
           )
   
       [_POST] => Array
           (
           )
   
       [_COOKIE] => Array
           (
           )
   // .... and more
   

After
______
.. code-block:: output

   PHP Fatal error:  Cannot acquire reference to $GLOBALS


PHP version change: 8.2

----



.. _`old-style-constructors`:

Old Style Constructors
======================


PHP code
________
.. code-block:: php

   

Before
______
.. code-block:: output

   

After
______
.. code-block:: output

   


PHP version change: 8.0

----



.. _`orphaned-parent`:

Orphaned Parent
===============
Calling the parent class of a class without parent is not possibled. It used to be a deprecated error, where the code would keep on executing. In PHP 8.0, it stops the execution entirely.

PHP code
________
.. code-block:: php

   <?php
   
   class x {
           function __construct() {
                   parent::__construct();
           }
   }
   
   new x;
   
   ?>

Before
______
.. code-block:: output

   Deprecated: Cannot use "parent" when current class scope has no parent

After
______
.. code-block:: output

   PHP Fatal error:  Cannot use "parent" when current class scope has no parent


PHP version change: 8.0

----



.. _`plus-and-concat-precedence`:

Plus And Concat Precedence
==========================
+ (and -) and . (dot) operators used to have the same priority. Thus, they used to be processed one after the other, from left to right. 



In PHP 8.0, the addition has now the highest precedence, and will happen before the concatenation.

PHP code
________
.. code-block:: php

   <?php
   
   echo 35 + 7 . '.' . 0 + 5;
   
   ?>

Before
______
.. code-block:: output

   42.5

After
______
.. code-block:: output

   47


PHP version change: 8.0

----



.. _`range()-lists-everything-between-strings`:

range() Lists Everything Between Strings
========================================
range() used to cast the arguments to integers. In PHP 8.3, strings are used as is, and range() returns the list of chars between the ASCII codes of those strings. 

PHP code
________
.. code-block:: php

   <?php
   
   print_r(range('0', 'A')); 
   
   ?>

Before
______
.. code-block:: output

   Array
   (
       [0] => 0
   )
   

After
______
.. code-block:: output

   Array
   (
       [0] => 0
       [1] => 1
       [2] => 2
       [3] => 3
       [4] => 4
       [5] => 5
       [6] => 6
       [7] => 7
       [8] => 8
       [9] => 9
       [10] => :
       [11] => ;
       [12] => <
       [13] => =
       [14] => >
       [15] => ?
       [16] => @
       [17] => A
   )
   


PHP version change: 8.3

----



.. _`range()-with-int-and-string`:

range() With Int And String
===========================
range() now emits a warning when one of the argument is a string, and the other is an integer. It still behaves like before, and cast the string to an integer.

PHP code
________
.. code-block:: php

   <?php
   
   print_r(range(1, 'z')); 
   
   ?>

Before
______
.. code-block:: output

   Array
   (
       [0] => 1
       [1] => 0
   )
   

After
______
.. code-block:: output

   PHP Warning:  range(): Argument #1 ($start) must be a single byte string if argument #2 ($end) is a single byte string, argument #2 ($end) converted to 0 in /Users/famille/Desktop/changedBehavior/codes/rangeWithIntAndString.php on line 3
   
   Warning: range(): Argument #1 ($start) must be a single byte string if argument #2 ($end) is a single byte string, argument #2 ($end) converted to 0 in /Users/famille/Desktop/changedBehavior/codes/rangeWithIntAndString.php on line 3
   Array
   (
       [0] => 1
       [1] => 0
   )
   


PHP version change: 8.3

----



.. _`relative-callable-in-strings`:

Relative Callable In Strings
============================
PHP has a syntax to designate a method, with its class and method name. That syntax used to support relative class names, such as self, parent and static. That allowed the definition of callable that would be relative to their point of execution, and not their point of definition. This is a gone feature in PHP 8.2.

PHP code
________
.. code-block:: php

   <?php
   
   class x {
       function a() {
           print __METHOD__;
       }
       
       function b() {
           call_user_func('self::a');
       }
   }
   
   (new x)->b();
   
   ?>

Before
______
.. code-block:: output

   x::a

After
______
.. code-block:: output

   PHP Deprecated:  Use of self in callables is deprecated in /Users/famille/Desktop/changedBehavior/codes/relativeCallable.php on line 9
   
   Deprecated: Use of self in callables is deprecated in /Users/famille/Desktop/changedBehavior/codes/relativeCallable.php on line 9
   x::a


PHP version change: 9.0

* `PHP RFC: Expand deprecation notice scope for partially supported callables <https://wiki.php.net/rfc/partially-supported-callables-expand-deprecation-notices>`_
* `Callable <https://www.php.net/manual/en/language.types.callable.php>`_


----



.. _`round()-mode-validation`:

round() Mode Validation
=======================
round() function has four modes, defined with 4 constants. If the 3rd argument is not one of those four constants, PHP used to silently use PHP_ROUND_HALF_UP as default value. In PHP 8.4, a ValueError is provided.

PHP code
________
.. code-block:: php

   <?php
   
   print $a = round(1.2, 2, 333);
   
   ?>

Before
______
.. code-block:: output

   1

After
______
.. code-block:: output

   round(): Argument #3 ($mode) must be a valid rounding mode (PHP_ROUND_*)


PHP version change: 8.4

* `round() <https://www.php.net/round>`_


----



.. _`__set_state()-method-must-be-static`:

__set_state() Method Must Be Static
===================================
Starting with PHP 8.0, the magic method __set_state() must be static when declared in a class.

PHP code
________
.. code-block:: php

   <?php
   
   class x {
       function __set_state() {}
       
   }

Before
______
.. code-block:: output

   

After
______
.. code-block:: output

   PHP Fatal error:  Method x::__set_state() must be static
   
   Fatal error: Method x::__set_state() must be static
   


PHP version change: 8.0

* `__set_state() <https://www.php.net/manual/en/language.oop5.magic.php#object.set-state>`_


----



.. _`sort()-places-integers-before-strings`:

sort() Places Integers Before Strings
=====================================
sort() used the PHP 7 way to compare values: then, strings would rank below integers, in particular below 0. 



In PHP 8, strings are now ranking above integers, and are moved to the end of the sorted array. This is related to the change of rules in comparisons.

PHP code
________
.. code-block:: php

   <?php
   
   $x = array('a',
              0,
              1,
              '0',
   );
   sort($x);
   print_r($x);
   ?>

Before
______
.. code-block:: output

   Array
   (
       [0] => a
       [1] => 0
       [2] => 0
       [3] => 1
   )
   

After
______
.. code-block:: output

   Array
   (
       [0] => 0
       [1] => 0
       [2] => 1
       [3] => a
   )
   


PHP version change: 8.0

----



.. _`spaces-in-namespaces`:

Spaces In Namespaces
====================
It used to be valid syntax to have a new line or a space in a namespace name. This is not the case in PHP 8.0 anymore.

PHP code
________
.. code-block:: php

   <?php
   
   namespace Vendor
   \Package;
   
   echo 1;
   

Before
______
.. code-block:: output

   1

After
______
.. code-block:: output

   PHP Parse error:  syntax error, unexpected fully qualified name "\Package", expecting "{" in /Users/famille/Desktop/changedBehavior/codes/spaces_in_namespaces.php on line 4
   
   Parse error: syntax error, unexpected fully qualified name "\Package", expecting "{" in /Users/famille/Desktop/changedBehavior/codes/spaces_in_namespaces.php on line 4
   


PHP version change: 8.0

----



.. _`spaceship`:

spaceship
=========
With the change of comparison between integers and strings, the spaceship was also impacted. Some spaceship comparisons did change, and are not returning the same results than before. 

PHP code
________
.. code-block:: php

   <?php
   
   var_dump( 0 <=> 'foo');
   var_dump( 0 <=> '');
   
   ?>

Before
______
.. code-block:: output

   int(0)
   int(0)

After
______
.. code-block:: output

   int(-1)
   int(1)


PHP version change: 8.0

----



.. _`storage-of-static-properties-trait`:

Storage Of Static Properties Trait
==================================
Static properties defined in a trait used to be merged with any existing static property in a parent class. Since PHP 8.3, the static property is directly related to the importing class, and is made distinct from any pre-existing static class. 

PHP code
________
.. code-block:: php

   <?php
   
   trait t {
       static $T = 1;
   }
   
   class x {
       static $T = 1;
   
       function goo() {
           echo self::$T;
       }
   
   }
   
   class y extends x {
       use t;
       
       function foo() {
           self::$T = 2;
           echo self::$T;
           self::goo();
       }
       
   }
   
   (new y)->foo();

Before
______
.. code-block:: output

   2

After
______
.. code-block:: output

   1


PHP version change: 8.3

----



.. _`str_replace()-checks-for-arguments`:

str_replace() Checks For Arguments
==================================
str_replace() can replace a string with another string; an array of strings with another array of strings, with a one to one relationship; or an array of strings with a single string, where all of the searched strings are replaced with the same target string. Yet, it is not possible to replace one string by an array of strings, as they are not of the same type, and PHP would need to choose one of the target strings.

This is an example of conditional typing : the type of one of the arguments depends on the type of the other argument.

PHP code
________
.. code-block:: php

   <?php
   
   print str_replace( array('b', 'c'), 'a', 'abc');
   ?>

Before
______
.. code-block:: output

   Notice: Array to string conversion in /in/GhW96 on line 3
   Arraybc

After
______
.. code-block:: output

   Uncaught TypeError: str_replace(): Argument #2 ($replace) must be of type string when argument #1


PHP version change: 8.0

----



.. _`strpos()-emits-typeerror`:

strpos() Emits TypeError
========================
strpos() and stripos() emit a TypeError when the offset is of the wrong type. In PHP 7.4, it emitted a warning.

PHP code
________
.. code-block:: php

   <?php
   strpos('a', 'abc', null);
   ?>

Before
______
.. code-block:: output

   PHP Warning:  strpos() expects parameter 3 to be int, string given

After
______
.. code-block:: output

   PHP Fatal error:  Uncaught TypeError: strpos(): Argument #3 ($offset) must be of type int, string given


PHP version change: 8.0

----



.. _`strpos()-emits-valueerror`:

strpos() Emits ValueError
=========================
strpos() and stripos() emits a ValueError when the offset is out of range. In PHP 7.4, it emitted a warning.

PHP code
________
.. code-block:: php

   <?php
   strpos('a', 'abc', 17);
   ?>

Before
______
.. code-block:: output

   PHP Warning:  strpos(): Offset not contained in string in /Users/famille/Desktop/changedBehavior/codes/strposValueError.php on line 3
   
   Warning: strpos(): Offset not contained in string in /Users/famille/Desktop/changedBehavior/codes/strposValueError.php on line 3
   bool(false)

After
______
.. code-block:: output

   PHP Fatal error:  Uncaught ValueError: strpos(): Argument #3 ($offset) must be contained in argument #1 ($haystack) 


PHP version change: 8.0

----



.. _`strpos()-with-integer-argument`:

strpos() With Integer Argument
==============================


PHP code
________
.. code-block:: php

   <?php
   
   var_dump(@strpos('abc', 98));
   
   ?>

Before
______
.. code-block:: output

   int(1)

After
______
.. code-block:: output

   false


PHP version change: 8.0

----



.. _`strpos()-does-not-accept-null-as-second-parameter`:

strpos() Does Not Accept Null As Second Parameter
=================================================
strpos() and stripos() used to accept NULL as second argument. This was deprecated with a warning, and then removed in PHP 8.

PHP code
________
.. code-block:: php

   <?php
   
   var_dump(strpos('1', null));
   
   ?>

Before
______
.. code-block:: output

   strpos(): Non-string needles will be interpreted as strings in the future. Use an explicit chr() call to preserve the current behavior

After
______
.. code-block:: output

   strpos(): Passing null to parameter #2 ($needle) of type string is deprecated


PHP version change: 8.0

----



.. _`strpos()-with-null-haystack`:

strpos() With Null Haystack
===========================


PHP code
________
.. code-block:: php

   <?php
   
   var_dump(strpos(null, '1'));
   
   ?>

Before
______
.. code-block:: output

   false

After
______
.. code-block:: output

   strpos(): Passing null to parameter #1 ($haystack) of type string is deprecated


PHP version change: 9.0

----



.. _`strsplit()-with-empty-string`:

strsplit() With Empty String
============================
strstplit() splits a string into smaller strings of the same size. Until PHP 8.2, it would return an array with an empty string when splitting an empty string. Since then, it returns an empty array.

This has impact on the code after, in processing or testing the result of the split. 

PHP code
________
.. code-block:: php

   <?php
   var_dump(str_split('', 3));
   ?>

Before
______
.. code-block:: output

   Array
   (
       [0] => 
   )

After
______
.. code-block:: output

   Array
   (
   )


PHP version change: 8.2

----



.. _`str_split()-throws-valueerror-with-negative-lengths`:

str_split() Throws ValueError With Negative Lengths
===================================================
str_split() used to emit a warning and return false, when provided with length (2nd argument) as an integer less then 1. In PHP 8.0, it now throws a ValueError.

PHP code
________
.. code-block:: php

   <?php
   str_split('abc', 0);
   ?>

Before
______
.. code-block:: output

   Warning: str_split(): The length of each segment must be greater than zero

After
______
.. code-block:: output

   Fatal error: Uncaught ValueError: str_split(): Argument #2 ($length) must be greater than 0


PHP version change: 8.0

----



.. _`switch()-changed-comparison-style`:

switch() Changed Comparison Style
=================================
The switch command uses a relaxed comparison style. Hence, the associated cases changed in PHP 8.0, whenever they use the special values such a 0, empty string '' or null.

PHP code
________
.. code-block:: php

   <?php
   
   $a = 0;
   switch ($a) {
       case 'a': 
           print 'a'.PHP_EOL;
           break;
   
       case 0: 
           print 'Null'.PHP_EOL;
           break;
           
       default:
           print 'Default'.PHP_EOL;
   }
   
   ?>

Before
______
.. code-block:: output

   a

After
______
.. code-block:: output

   Null


PHP version change: 8.0

----



.. _`tentative-static-returntype-with-datetime`:

Tentative Static Returntype With Datetime
=========================================
The createFromImmutable() method from DateTime and DateTimeImmutable always returns an object of the same class. In PHP 8.2 and later, the return type is now ``static``, it will tentatively return a children class, when the method is called from that child class.

PHP code
________
.. code-block:: php

   <?php
   
   class A extends DateTime{}
   
   $date = new DateTimeImmutable(2014-06-20 11:45 Europe/London);
   
   $mutable = A::createFromImmutable( $date );
   
   var_dump($mutable);
   ?>

Before
______
.. code-block:: output

   

After
______
.. code-block:: output

   object(A)#2 (3) {
     [date]=>
     string(26) 2014-06-20 11:45:00.000000
     [timezone_type]=>
     int(3)
     [timezone]=>
     string(13) Europe/London
   }
   


PHP version change: 8.2

----



.. _`ternary-associativity`:

Ternary Associativity
=====================
The ternary operator used to have a left associativity : it would process first the ``then`` and ``else`` clauses, before executing itself.

Since PHP 8.0, the ternary operator produces a fatal error when the nested ternaries are ambiguous.

The update forces the code to use parenthesis, and set the priorities between the operators explicitely.

This doesn't apply to the ``then`` clause, which is always unambiguous.

PHP code
________
.. code-block:: php

   <?php
   
   $a = 2;
   print $a == 1 ? 'one'
        : $a == 2 ? 'two'
        : $a == 3 ? 'three'
        : 'other';
   
   ?>

Before
______
.. code-block:: output

   three

After
______
.. code-block:: output

   Fatal error: Unparenthesized `a ? b : c ? d : e` is not supported. Use either `(a ? b : c) ? d : e` or `a ? b : (c ? d : e)` 


PHP version change: 8.0

* `PHP RFC: Deprecate left-associative ternary operator <https://wiki.php.net/rfc/ternary_associativity>`_


----



.. _`trailing-comma-in-arguments`:

Trailing Comma In Arguments
===========================
Trailing commas in arguments is the last argument left empty. This last argument is not transmitted, so the last comma has no effect. This feature is useful when arguments are kept on a different line : the last argument has now also a comma, and adding one extra argument will yield a one line diff, compared to the previous version. Without it, the diff would be two lines, and include the preceding line. 

PHP code
________
.. code-block:: php

   <?php
   
   function foo($a,
                $b,
                $c,
                 ) { echo __METHOD__; }
   
   echo foo(1);
   
   ?>

Before
______
.. code-block:: output

   PHP Parse error:  syntax error, unexpected ')', expecting variable (T_VARIABLE)

After
______
.. code-block:: output

   foo


PHP version change: 8.0

----



.. _`trailing-comma-in-calls`:

Trailing Comma In Calls
=======================
Trailing commas in parameters is the last parameter left empty. This last parameter is not transmitted, so the last comma has no effect. This feature is useful when parameters are kept on a different line : the last argument has now also a comma, and adding one extra argument will yield a one line diff, compared to the previous version. Without it, the diff would be two lines, and include the preceding line. 

PHP code
________
.. code-block:: php

   <?php
   
   function foo($a,
                $b,
                $c) { echo __METHOD__; }
   
   echo foo(1,
            2,
            3,
            );
   
   ?>

Before
______
.. code-block:: output

   PHP Parse error:  syntax error, unexpected ')', expecting variable (T_VARIABLE)

After
______
.. code-block:: output

   foo


PHP version change: 7.3

----



.. _`constants-in-traits`:

Constants In Traits
===================
Constants are allowed in traits in PHP 8.3 and more recent. Until then, they were not supported.

PHP code
________
.. code-block:: php

   <?php
   
   trait t {
       const A = 1;
   }
   
   class x {
   
   use t;
   }
   
   echo X::A;
   ?>

Before
______
.. code-block:: output

   PHP Fatal error:  Traits cannot have constants

After
______
.. code-block:: output

   1


PHP version change: 8.2

----



.. _`typed-class-constant`:

Typed Class Constant
====================
Support for typed class constants was added in PHP 8.3

PHP code
________
.. code-block:: php

   <?php
   
   class x {
       public int A = 1;
   }
   
   echo X::A;
   
   ?>

Before
______
.. code-block:: output

   Parse error: syntax error, unexpected identifier A, expecting variable

After
______
.. code-block:: output

   1


PHP version change: 8.3

* `Class Constants <https://www.php.net/manual/en/language.oop5.constants.php>`_


----



.. _`undefined-constants`:

Undefined Constants
===================
Undefined global constants used to fallback to their equivalent string. 

PHP code
________
.. code-block:: php

   <?php
   
   echo D;
   
   ?>

Before
______
.. code-block:: output

   D

After
______
.. code-block:: output

   Uncaught Error: Undefined constant D


PHP version change: 8.0

----



.. _`var_export()-format`:

var_export() Format
===================
PHP used to export an object with a fully qualified name, except for the first backslash. Since PHP 8.2, the name is a fully qualified one, and may be used in any namespace, without adaptation.

PHP code
________
.. code-block:: php

   <?php
   class x {}
   var_export(new x);
   ?>

Before
______
.. code-block:: output

   x::__set_state(array(
   ))

After
______
.. code-block:: output

   \x::__set_state(array(
   ))


PHP version change: 8.2

* `var_export() combined with enum produces code unsuitable for inclusion in namespaces <https://github.com/php/php-src/issues/8232>`_
* `Add leading backslash to enum and class names in var_export <https://externals.io/message/117466>`_


----



.. _`var_export()-with-stdclass`:

var_export() With Stdclass
==========================
PHP used to export stdClass objects like other classes, with a call to the magic method __set_state(). Since PHP 7.2, it does the export with the cast of an array to (object). This is more readable, and acknowledge the absence of such method for stdClass.

PHP code
________
.. code-block:: php

   <?php
   var_export(new stdClass);
   ?>

Before
______
.. code-block:: output

   stdClass::__set_state(array())

After
______
.. code-block:: output

   (object) array()


PHP version change: 7.2

----



.. _`version_compare()-stricter-operators`:

version_compare() Stricter Operators
====================================
version_compare() compares version strings, using an operator, passed as third parameter. Until PHP 8.3, unknown operators ignore it, and use the default value. 



Nowadays, it is generating a fatal error.

PHP code
________
.. code-block:: php

   <?php
   
   print version_compare('1.0', '2.3', '!');
   
   ?>

Before
______
.. code-block:: output

   1

After
______
.. code-block:: output

   PHP Fatal error:  Uncaught ValueError: version_compare(): Argument #3 ($operator) must be a valid comparison operator


PHP version change: 8.1

----



.. _`vsprint()-requires-an-array`:

vsprint() Requires An Array
===========================
vsprint() used to skip argument type validation, and wrongly report missing arguments, while that argument was not a array. Since PHP 8.0, the error message is clear.

PHP code
________
.. code-block:: php

   <?php
   
   print vsprintf('%04d-%02d-%02d', 1);
   vprintf('%04d-%02d-%02d', 1);
   
   ?>

Before
______
.. code-block:: output

   vsprintf(): Too few arguments

After
______
.. code-block:: output

   vsprintf(): Argument #2 ($values) must be of type array, int given


PHP version change: 8.0

----



.. _`vsprintf()-returns-empty-string-on-error`:

vsprintf() Returns Empty String On Error
========================================
vsprintf() always returns a string, or raise an exception. Until PHP 8.0, it used to return false in case of error.

PHP code
________
.. code-block:: php

   <?php
   
   var_dump(vsprintf(%04d-%02d-%02d, []));
   
   ?>

Before
______
.. code-block:: output

   Warning: vsprintf(): Too few arguments in /in/1pYdW on line 3
   bool(false)

After
______
.. code-block:: output

   Fatal error: Uncaught ValueError: The arguments array must contain 3 items, 0 given


PHP version change: 8.0

----



.. _`yield-must-use-integer-or-string-keys`:

Yield Must Use Integer Or String Keys
=====================================
A generator is unpacked as an array, and as such, it doesn't allow keys to be anything else but string or integer. The generator may still be used in a foreach() structure, and yield usable keys, but it can't be unpacked or turned into a array without an error. In previous versions, the keys would be ignored, and re-indexed.

PHP code
________
.. code-block:: php

   <?php
   
   function foo(...$args) {
       var_dump($args);
   }
   function gen() {
       yield 1.23 => 123;
   }
   foo(...gen());
   
   ?>

Before
______
.. code-block:: output

   array(3) {
     [0]=>
     int(123)
     [1]=>
     int(123)
     [2]=>
     int(123)
   }

After
______
.. code-block:: output

   Fatal error: Uncaught Error: Keys must be of type int|string during argument unpacking


PHP version change: 7.2

----


