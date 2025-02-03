PHP Error Messages
--------------------
    * :ref:`Calling static trait method t::foo is deprecated, it should only be called on a class using the trait <cannot-call-traits-methods-directly>`
    * :ref:`Uncaught TypeError: array_key_exists(): Argument #2 ($array) must be of type array, stdClass given <array_key_exists()-doesn't-work-on-objects>`
    * :ref:`Cannot access offset of type string on string <array-usage-with-string-initialisation>`
    * :ref:`Cannot auto-initialize an array inside property %s::$%s of type %s <auto-initialization-from-boolean>`
    * :ref:`Enum case value must be compile-time evaluatable <backed-enum-values-needed-to-compile>`
    * :ref:`Trying to access array offset on %s <null-used-as-array>`
    * :ref:`Accessing static trait property %s::%s is deprecated, it should only be accessed on a class using the trait <accessing-directly-properties-in-trait>`
    * :ref:`must be a user-defined class name, internal class name given <class_alias()-works-on-internal-classes>`
    * :ref:`Cannot use ::class with dynamic class name <::class-on-object>`
    * :ref:`Cannot modify readonly property %s::$%s <can-clone-readonly-properties>`
    * :ref:`Undefined variable <$php_errormsg-has-been-removed>`
    * :ref:`Access level to x::IPri must be public (as in interface i) <interface-imported-constant-visibility-is-checked>`
    * :ref:`Traits cannot have constants <constants-in-traits>`
    * :ref:`Declaration of %s::%s() should be compatible with %s::%s() <returntype-covariance>`
    * :ref:`Creating default object from empty value <creating-object-on-null>`
    * :ref:`Array and string offset access syntax with curly braces <array-syntax-with-curly-braces-are-no-more>`
    * :ref:`Call to undefined function exit() <die-and-exit-as-functions>`
    * :ref:`The behavior of unparenthesized expressions containing both '.' and '+'/'-' will change in PHP 8: '+'/'-' will take a higher precedence <dot-and-plus-changed-precedence>`
    * :ref:`Duplicate declaration of static variable $%s <duplicate-static-definition>`
    * :ref:`Creation of dynamic property User::$name is deprecated <no-dynamic-properties-by-default>`
    * :ref:`Return type of x::current() should either be compatible with Iterator::current(): mixed, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice <enforcing-native-php-returntype>`
    * :ref:`file_get_contents(): Filename cannot be empty <file_get_contents()-needs-a-real-path>`
    * :ref:`Cannot use 'final' as method modifier <final-method-in-trait>`
    * :ref:`get_called_class() called from outside a class <get_called_class()-cannot-be-called-outside-a-class>`
    * :ref:`Cannot acquire reference to $GLOBALS <$globals-assignement>`
    * :ref:`Implicit conversion from float 15.5 to int loses precision <implicit-array-key-conversion>`
    * :ref:`Default value for property of type int may not be null. Use the nullable type ?int to allow null default value <implicit-nullable>`
    * :ref:`implode(): Argument #2 ($array) must be of type ?array, string given <implode()-arguments-order>`
    * :ref:`Increment on type bool has no effect, this will change in the next major version of PHP <increment-on-boolean-is-deprecated>`
    * :ref:`A non-numeric value encountered <integer-non-silent-conversion>`
    * :ref:`Invalid characters passed for attempted conversion, these have been ignored <base-conversion-reports-invalid-characters>`
    * :ref:`Uncaught TypeError: iterator_count(): Argument #1 ($iterator) must be of type Traversable, array given <iterator_count()-also-count-arrays>`
    * :ref:`Return type of x::jsonSerialize() should either be compatible with JsonSerializable::jsonSerialize(): mixed, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice <jsonserialize-must-have-return-type>`
    * :ref:`Declaration of SuperFoo::process(array $items): array should be compatible with Foo::process(stdClass $item): array <covariance-and-contravariance-are-fatal>`
    * :ref:`Array must contain at least one element <no-max()-on-empty-array>`
    * :ref:`must-contain-at-least-one-element <min()-doesn't-accept-empty-arrays>`
    * :ref:`Cannot use 'mixed' as class name as it is reserved <mixed-is-now-a-keyword>`
    * :ref:`serialize(): __sleep should return an array only containing the names of instance-variables to serialize <__sleep()-method-enforces-return-type>`
    * :ref:`Non-static method Foo::bar() cannot be called statically <non-static-method-called-statically>`
    * :ref:`Cannot use "parent" when current class scope has no parent <orphaned-parent>`
    * :ref:`The (real) cast is deprecated, use (float) instead <(real)-is-replaced-by-(float)>`
    * :ref:`Returning by reference from a void function is deprecated <return-reference-on-void>`
    * :ref:`Return type of x::current() should either be compatible with Iterator::current(): mixed <php-native-return-types-are-now-enforced>`
    * :ref:`must be a valid rounding mode (RoundingMode::*) <round()-mode-validation>`
    * :ref:`Method x::__set_state() must be static <__set_state()-method-must-be-static>`
    * :ref:`usort(): Returning bool from comparison function is deprecated, return an integer less than, equal to, or greater than zero <sorting-closure-must-return-integers>`
    * :ref:`syntax error, unexpected fully qualified name "\Package", expecting "{" <spaces-in-namespaces>`
    * :ref:`Object of class stdClass could not be converted to string <str_replace()-on-arrays-of-objects>`
    * :ref:`must-be-contained-in-argument-#1-($haystack) <strpos()-with-out-of-range-offset-is-a-fatal-error>`
    * :ref:`Non-string needles will be interpreted as strings in the future. Use an explicit chr() call to preserve the current behavior  <strpos()-does-not-accept-false>`
    * :ref:`Passing null to parameter #1 ($haystack) of type string is deprecated <strpos()-with-null-haystack>`
    * :ref:`syntax error, unexpected ')', expecting variable (T_VARIABLE) <trailing-comma-in-calls>`
    * :ref:`Uncaught Error: Undefined constant "%s" <undefined-constants>`
    * :ref:`Cannot unpack array with string keys <unpack-array-with-string-keys>`
    * :ref:`The (unset) cast is deprecated <(unset)-was-removed>`
    * :ref:`Power of base 0 and negative exponent is deprecated <cannot-raise-zero-to-negative-powers>`
