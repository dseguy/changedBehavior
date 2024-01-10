PHP Error Messages
--------------------
    * :ref:`Cannot access offset of type string on string <array-usage-with-string-initialisation>`
    * :ref:`Trying to access array offset on null <null-used-as-array>`
    * :ref:`First argument of class_alias() must be a name of user defined class <class_alias()-works-on-internal-classes>`
    * :ref:`Cannot use ::class with dynamic class name <::class-on-object>`
    * :ref:`Cannot modify readonly property x::$p <can-clone-readonly-properties>`
    * :ref:`Undefined variable $x <compact()-throws-notice-on-missing-variable>`
    * :ref:`Access level to x::IPri must be public (as in interface i) <interface-imported-constant-visibility-is-checked>`
    * :ref:`Declaration of y::foo(i $a) should be compatible with x::foo(j $a) <parameter-contravariance>`
    * :ref:`Declaration of y::foo(): j must be compatible with x::foo(): i <returntype-covariance>`
    * :ref:`The behavior of unparenthesized expressions containing both '.' and '+'/'-' will change in PHP 8: '+'/'-' will take a higher precedence <dot-and-plus-changed-precedence>`
    * :ref:`Duplicate declaration of static variable $s <duplicate-static-definition>`
    * :ref:`Creation of dynamic property User::$name is deprecated <no-dynamic-properties-by-default>`
    * :ref:`Return type of x::current() should either be compatible with Iterator::current(): mixed, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice <enforcing-native-php-returntype>`
    * :ref:`file_get_contents(): Filename cannot be empty <file_get_contents()-needs-a-real-path>`
    * :ref:`Cannot use 'final' as method modifier <final-method-in-trait>`
    * :ref:`Cannot acquire reference to $GLOBALS <$globals-assignement>`
    * :ref:`Implicit conversion from float 15.5 to int loses precision <implicit-array-key-conversion>`
    * :ref:`implode(): Argument #2 ($array) must be of type ?array, string given <implode()-arguments-order>`
    * :ref:`Increment on type bool has no effect, this will change in the next major version of PHP <increment-on-boolean-is-deprecated>`
    * :ref:`instanceof expects an object instance, constant given <instanceof-expect-objects>`
    * :ref:`A non-numeric value encountered <integer-non-silent-conversion>`
    * :ref:`Invalid characters passed for attempted conversion, these have been ignored <base-conversion-reports-invalid-characters>`
    * :ref:`Uncaught TypeError: iterator_count(): Argument #1 ($iterator) must be of type Traversable, array given <iterator_count()-also-count-arrays>`
    * :ref:`Return type of x::jsonSerialize() should either be compatible with JsonSerializable::jsonSerialize(): mixed, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice <jsonserialize-must-have-return-type>`
    * :ref:`Declaration of SuperFoo::process(array $items): array should be compatible with Foo::process(stdClass $item): array <covariance-and-contravariance-are-fatal>`
    * :ref:`Array must contain at least one element <min()-doesn't-accept-empty-arrays>`
    * :ref:`Cannot use 'mixed' as class name as it is reserved <mixed-is-now-a-keyword>`
    * :ref:`serialize(): __sleep should return an array only containing the names of instance-variables to serialize <__sleep()-method-enforces-return-type>`
    * :ref:`Non-static method Foo::bar() cannot be called statically <non-static-method-called-statically>`
    * :ref:`Cannot use "parent" when current class scope has no parent <orphaned-parent>`
    * :ref:`Undefined variable $php_errormsg <$php_errormsg-has-been-removed>`
    * :ref:`The (real) cast is deprecated, use (float) instead <(real)-is-replaced-by-(float)>`
    * :ref:`Returning by reference from a void function is deprecated <return-reference-on-void>`
    * :ref:`Return type of x::current() should either be compatible with Iterator::current(): mixed, <php-native-return-types-are-now-enforced>`
    * :ref:`Argument #3 ($mode) must be a valid rounding mode (PHP_ROUND_*) <round()-mode-validation>`
    * :ref:`Method x::__set_state() must be static <__set_state()-method-must-be-static>`
    * :ref:`usort(): Returning bool from comparison function is deprecated, return an integer less than, equal to, or greater than zero <sorting-closure-must-return-integers>`
    * :ref:`syntax error, unexpected fully qualified name "\Package", expecting "{" <spaces-in-namespaces>`
    * :ref:`strpos(): Non-string needles will be interpreted as strings in the future. Use an explicit chr() call to preserve the current behavior <str_pos()-requires-only-strings>`
    * :ref:`Non-string needles will be interpreted as strings in the future. Use an explicit chr() call to preserve the current behavior  <strpos()-does-not-accept-false>`
    * :ref:`Uncaught Error: Undefined constant "D" <undefined-constants>`
    * :ref:`Cannot unpack array with string keys <unpack-array-with-string-keys>`
    * :ref:`unserialize(): Extra data starting at offset 37 of 39 bytes <unserialize()-checks-the-end-of-the-string>`
    * :ref:`The (unset) cast is deprecated <(unset)-was-removed>`
