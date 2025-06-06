PHP Error Messages
--------------------
    * :ref:`Cannot use "%s" as a type name as it is reserved <array-has-no-absolute-name>`
    * :ref:`Calling static trait method t::foo is deprecated, it should only be called on a class using the trait <cannot-call-traits-methods-directly>`
    * :ref:`Uncaught TypeError: array_key_exists(): Argument #2 ($array) must be of type array, stdClass given <array_key_exists()-doesn't-work-on-objects>`
    * :ref:`Cannot access offset of type string on string <array-usage-with-string-initialisation>`
    * :ref:`Cannot auto-initialize an array inside property %s::$%s of type %s <auto-initialization-from-boolean>`
    * :ref:`Enum case value must be compile-time evaluatable <backed-enum-values-needed-to-compile>`
    * :ref:`Trying to access array offset on %s <null-used-as-array>`
    * :ref:`Non-static method %s::%s() should not be called statically <calling-non-static-method-statically>`
    * :ref:`Accessing static trait property %s::%s is deprecated, it should only be accessed on a class using the trait <accessing-directly-properties-in-trait>`
    * :ref:`syntax error, unexpected ')', expecting '|' or variable (T_VARIABLE) <catch-without-variable>`
    * :ref:`must be a user-defined class name, internal class name given <class_alias()-works-on-internal-classes>`
    * :ref:`Cannot use ::class with dynamic class name <::class-on-object>`
    * :ref:`Constant expression contains invalid operations <clone-a-constant>`
    * :ref:`__clone method called on non-object <clone-a-constant>`
    * :ref:`Cannot modify readonly property %s::$%s <can-clone-readonly-properties>`
    * :ref:`Undefined variable <$php_errormsg-has-been-removed>`
    * :ref:`Access level to x::IPri must be public (as in interface i) <interface-imported-constant-visibility-is-checked>`
    * :ref:`Traits cannot have constants <constants-in-traits>`
    * :ref:`Declaration of %s::%s() should be compatible with %s::%s() <returntype-covariance>`
    * :ref:`Creating default object from empty value <creating-object-on-null>`
    * :ref:`Array and string offset access syntax with curly braces <array-syntax-with-curly-braces-are-no-more>`
    * :ref:`Call to undefined function exit() <die-and-exit-as-functions>`
    * :ref:`0 <optional-parameter-are-after-compulsory-parameters>`
    * :ref:`The behavior of unparenthesized expressions containing both '.' and '+'/'-' will change in PHP 8: '+'/'-' will take a higher precedence <dot-and-plus-changed-precedence>`
    * :ref:`Duplicate declaration of static variable $%s <duplicate-static-definition>`
    * :ref:`Creation of dynamic property User::$name is deprecated <no-dynamic-properties-by-default>`
    * :ref:`Return type of x::jsonSerialize() should either be compatible with JsonSerializable::jsonSerialize(): mixed, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice <jsonserialize-must-have-return-type>`
    * :ref:`file_get_contents(): Filename cannot be empty <file_get_contents()-needs-a-real-path>`
    * :ref:`Cannot use 'final' as method modifier <final-method-in-trait>`
    * :ref:`get_called_class() called from outside a class <get_called_class()-cannot-be-called-outside-a-class>`
    * :ref:`Cannot acquire reference to $GLOBALS <$globals-assignement>`
    * :ref:`Implicit conversion from float 15.5 to int loses precision <implicit-array-key-conversion>`
    * :ref:`Default value for property of type int may not be null. Use the nullable type ?int to allow null default value <implicit-nullable>`
    * :ref:`implode(): Argument #2 ($array) must be of type ?array, string given <implode()-arguments-order>`
    * :ref:`Increment on type bool has no effect, this will change in the next major version of PHP <increment-on-boolean-is-deprecated>`
    * :ref:`Cannot %s readonly property %s::$%s from %s%s <init-readonly-properties-in-child>`
    * :ref:`syntax error, unexpected '[', expecting ';' or ',' <interpolated-string-dereferencing>`
    * :ref:`syntax error, unexpected '::' (T_PAAMAYIM_NEKUDOTAYIM) <calling-static-methods-on-strings>`
    * :ref:`A non-numeric value encountered <integer-non-silent-conversion>`
    * :ref:`Invalid characters passed for attempted conversion, these have been ignored <php-warns-when-finding-unconvertible-characters>`
    * :ref:`Uncaught TypeError: iterator_count(): Argument #1 ($iterator) must be of type Traversable, array given <iterator_count()-also-count-arrays>`
    * :ref:`Declaration of SuperFoo::process(array $items): array should be compatible with Foo::process(stdClass $item): array <covariance-and-contravariance-are-fatal>`
    * :ref:`Array must contain at least one element <no-max()-on-empty-array>`
    * :ref:`Must contain at least one element <min()-doesn't-accept-empty-arrays>`
    * :ref:`Cannot use 'mixed' as class name as it is reserved <mixed-is-now-a-keyword>`
    * :ref:`Cannot combine named arguments and argument unpacking <named-parameters-and-variadic>`
    * :ref:`serialize(): __sleep should return an array only containing the names of instance-variables to serialize <__sleep()-method-enforces-return-type>`
    * :ref:`Non-static method Foo::bar() cannot be called statically <non-static-method-called-statically>`
    * :ref:`Deprecated: Methods with the same name as their class will not be constructors in a future version of PHP; x has a deprecated constructor <old-style-constructor>`
    * :ref:`Only the first byte will be assigned to the string offset <only-first-byte>`
    * :ref:`Cannot use "parent" when current class scope has no parent <orphaned-parent>`
    * :ref:`Use of "parent" in callables is deprecated <parent-cannot-be-used-anymore-in-callable-arrays>`
    * :ref:`Calling %s() on an object is deprecated <passing-objects-is-deprecated>`
    * :ref:`The (real) cast is deprecated, use (float) instead <(real)-is-replaced-by-(float)>`
    * :ref:`Returning by reference from a void function is deprecated <return-reference-on-void>`
    * :ref:`Return type of x::current() should either be compatible with Iterator::current(): mixed <php-native-return-types-are-now-enforced>`
    * :ref:`must be a valid rounding mode (RoundingMode::*) <round()-mode-validation>`
    * :ref:`Use of "self" in callables is deprecated <static-cannot-be-used-anymore-in-callable-arrays>`
    * :ref:`Method x::__set_state() must be static <__set_state()-method-must-be-static>`
    * :ref:`usort(): Returning bool from comparison function is deprecated, return an integer less than, equal to, or greater than zero <sorting-closure-must-return-integers>`
    * :ref:`syntax error, unexpected fully qualified name "\Package", expecting "{" <spaces-in-namespaces>`
    * :ref:`Use of "static" in callables is deprecated <static-cannot-be-used-anymore-in-callable-arrays>`
    * :ref:`Object of class stdClass could not be converted to string <str_replace()-on-arrays-of-objects>`
    * :ref:`%s(): Argument #%d ($%s) must be contained in argument #%d ($%s) <strpos()-with-out-of-range-offset-is-a-fatal-error>`
    * :ref:`Offset not contained in string. <strpos()-with-out-of-range-offset-is-a-fatal-error>`
    * :ref:`Argument #3 ($offset) must be of type int, string given <strpos()-emits-typeerror>`
    * :ref:`Non-string needles will be interpreted as strings in the future. Use an explicit chr() call to preserve the current behavior  <strpos()-does-not-accept-false>`
    * :ref:`Passing null to parameter #1 ($haystack) of type string is deprecated <strpos()-with-null-haystack>`
    * :ref:`Unparenthesized `a ? b : c ? d : e` is not supported. <ternary-associativity>`
    * :ref:`Using $this when not in object context <$this-must-be-the-local-object>`
    * :ref:`syntax error, unexepected 'throw' (T_THROW) <throw-is-an-expression>`
    * :ref:`syntax error, unexpected ')', expecting variable (T_VARIABLE) <trailing-comma-in-calls>`
    * :ref:`Uncaught Error: Undefined constant "%s" <undefined-constants>`
    * :ref:`Cannot unpack array with string keys <unpack-array-with-string-keys>`
    * :ref:`unserialize(): Extra data starting at offset 37 of 39 bytes <unserialize()-checks-the-end-of-the-string>`
    * :ref:`Maximum depth of %d exceeded. The depth limit can be changed using the max_depth unserialize() option <unserialize()-max_depth-option>`
    * :ref:`The (unset) cast is deprecated <(unset)-was-removed>`
    * :ref:`version_compare(): Argument #3 ($operator) must be a valid comparison operator <version_compare()-stricter-operators>`
    * :ref:`Too few arguments <vsprint()-requires-an-array>`
    * :ref:`Argument #%d ($%s) must be of type %s, %s given <vsprint()-requires-an-array>`
    * :ref:`Power of base 0 and negative exponent is deprecated <cannot-raise-zero-to-negative-powers>`
