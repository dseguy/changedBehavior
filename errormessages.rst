PHP Error Messages
--------------------
    * :ref:`Cannot use "array" as a type name as it is reserved <array-and-callable-cannot-be-absolute>`
    * :ref:`Cannot use "%s" as a type name as it is reserved <array-has-no-absolute-name>`
    * :ref:`Abstract function t::foo() cannot be declared private <no-abstract-private-method-in-traits>`
    * :ref:`Calling static trait method t::foo is deprecated, it should only be called on a class using the trait <cannot-call-traits-methods-directly>`
    * :ref:`Cannot use%s %s as %s because the name is already in use <alias-replace-class>`
    * :ref:`Uncaught TypeError: array_key_exists(): Argument #2 ($array) must be of type array, stdClass given <array_key_exists()-doesn't-work-on-objects>`
    * :ref:`array_merge() expects at least 1 parameter, 0 given <array_merge()-and-variadic>`
    * :ref:`Cannot access offset of type string on string <array-usage-with-string-initialisation>`
    * :ref:`array_product(): Multiplication is not supported on type array <array_product()-new-checks>`
    * :ref:`array_sum(): Addition is not supported on type array <array_sum()-checks-operands-thoroughly>`
    * :ref:`Defining a custom assert() function is deprecated, as the function has special semantics <assert-is-reserved-function>`
    * :ref:`Cannot auto-initialize an array inside property %s::$%s of type %s <auto-initialization-from-boolean>`
    * :ref:` __autoload() is no longer supported, use spl_autoload_register() instead <using-__autoload()-is-deprecated>`
    * :ref:`Enum case value must be compile-time evaluatable <backed-enum-values-needed-to-compile>`
    * :ref:`The backtick (`) operator is deprecated, use shell_exec() instead <back-tick-operator-is-deprecated>`
    * :ref:`Trying to access array offset on %s <null-used-as-array>`
    * :ref:`Non-static method %s::%s() should not be called statically <calling-non-static-method-statically>`
    * :ref:`Accessing static trait property %s::%s is deprecated, it should only be accessed on a class using the trait <accessing-directly-properties-in-trait>`
    * :ref:`Case statements followed by a semicolon (;) are deprecated, use a colon (:) instead <no-case-with-a-semi-colon>`
    * :ref:`define(): Argument #3 ($case_insensitive) is ignored since declaration of case-insensitive constants is no longer supported <php-constants-are-not-case-insensitive>`
    * :ref:`define(): delaration of case insensitive constants is deprecated <php-constants-are-not-case-insensitive>`
    * :ref:`Constant expression contains invalid operations <static-variable-accepts-functioncalls-as-default>`
    * :ref:`syntax error, unexpected ')', expecting '|' or variable (T_VARIABLE) <catch-without-variable>`
    * :ref:`ceil(): Argument #1 ($num) must be of type int|float, GMP given <ceil()-strict-mode>`
    * :ref:`must be a user-defined class name, internal class name given <class_alias()-works-on-internal-classes>`
    * :ref:`Cannot use ::class with dynamic class name <::class-on-object>`
    * :ref:`Using "_" as %s is deprecated since 8.4 <underscore-named-class>`
    * :ref:`__clone method called on non-object <clone-a-constant>`
    * :ref:`Cannot modify readonly property %s::$%s <can-clone-readonly-properties>`
    * :ref:`Undefined variable <$php_errormsg-has-been-removed>`
    * :ref:`Access level to x::IPri must be public (as in interface i) <interface-imported-constant-visibility-is-checked>`
    * :ref:`Traits cannot have constants <constants-in-traits>`
    * :ref:`Declaration of %s::%s() should be compatible with %s::%s() <returntype-covariance>`
    * :ref:`count(): Argument #1 ($value) must be of type Countable|array, int given <count()-must-count-countable>`
    * :ref:`Creating default object from empty value <creating-object-on-null>`
    * :ref:`Array and string offset access syntax with curly braces is deprecated <array-syntax-with-curly-braces-are-no-more>`
    * :ref:`Constant SUNFUNCS_RET_TIMESTAMP is deprecated  <constant-%s-is-deprecated>`
    * :ref:`Cannot use %s as array <destructuring-non-arrays>`
    * :ref:`Call to undefined function exit() <die-and-exit-as-functions>`
    * :ref:`Passing null to parameter #1 ($directory) of type string is deprecated <no-more-dir()-with-null>`
    * :ref:`Using ${expr} (variable variables) in strings is deprecated, use {${expr}} instead <${expression}-is-deprecated>`
    * :ref:`The behavior of unparenthesized expressions containing both '.' and '+'/'-' will change in PHP 8: '+'/'-' will take a higher precedence <dot-and-plus-changed-precedence>`
    * :ref:`Duplicate declaration of static variable $%s <duplicate-static-definition>`
    * :ref:`syntax error, unexpected token ";", expecting "(" <dynamic-class-constant>`
    * :ref:`Creation of dynamic property User::$name is deprecated <no-dynamic-properties-by-default>`
    * :ref:`Constant %s is deprecated <e_strict-is-deprecated>`
    * :ref:`Passing E_USER_ERROR to trigger_error() is deprecated since 8.4, throw an exception or call exit with a string message instead <e_user_error-is-deprecated>`
    * :ref:`The each() function is deprecated. This message will be suppressed on further calls <each()-has-been-removed>`
    * :ref:`Return type of x::jsonSerialize() should either be compatible with JsonSerializable::jsonSerialize(): mixed, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice <jsonserialize``-must-have-return-type>`
    * :ref:`Return type of %s::%s() should either be compatible with %s::%s(): mixed <enforcing-return-type-with-spl-classes>`
    * :ref:`Empty delimiter <explode()-forbids-empty-strings>`
    * :ref:`%s(): Passing null to parameter #% <cannot-explode()-null>`
    * :ref:`file_get_contents(): Filename cannot be empty <file_get_contents()-needs-a-real-path>`
    * :ref:`Cannot use 'final' as constant modifier <final-class-constants>`
    * :ref:`Cannot use 'final' as method modifier <final-method-in-trait>`
    * :ref:`Cannot use the final modifier on a parameter <final-promoted-properties>`
    * :ref:`the $escape parameter must be provided as its default value will change <fputcsv()-needs-escape-parameter>`
    * :ref:`Generator return type must be a supertype of Generator <generators-don't-return>`
    * :ref:`get_called_class() called from outside a class <get_called_class()-cannot-be-called-outside-a-class>`
    * :ref:`Calling get_class() without arguments is deprecated <get_class()-needs-an-argument>`
    * :ref:`Cannot acquire reference to $GLOBALS <no-reference-to-$globals-variable>`
    * :ref:`syntax error, unexpected end of file <heredoc-syntax-in-an-array>`
    * :ref:`The predefined locally scoped $http_response_header variable is deprecated, call http_get_last_response_headers() instead <$http_response_header-is-deprecated>`
    * :ref:`Implicit conversion from float 15.5 to int loses precision <implicit-array-key-conversion>`
    * :ref:`Default value for property of type int may not be null. Use the nullable type ?int to allow null default value <implicit-nullable>`
    * :ref:`implode(): Argument #2 ($array) must be of type ?array, string given <implode()-arguments-order>`
    * :ref:`Increment on non-numeric string is deprecated, use str_increment() instead <increment-non-alphanumeric>`
    * :ref:`Increment on type bool has no effect, this will change in the next major version of PHP <increment-on-boolean-is-deprecated>`
    * :ref:`Cannot %s readonly property %s::$%s from %s%s <init-readonly-properties-in-child-class>`
    * :ref:`instanceof expects an object instance, constant given <instanceof-expect-objects>`
    * :ref:`Cannot access %s constant %s::%s <interface-constant-visibility-checks>`
    * :ref:`Access level to %s::%s must be %s (as in %s) <interface-constant-visibility-checks>`
    * :ref:`syntax error, unexpected '[', expecting ';' or ',' <interpolated-string-dereferencing>`
    * :ref:`syntax error, unexpected '::' (T_PAAMAYIM_NEKUDOTAYIM) <calling-static-methods-on-strings>`
    * :ref:`syntax-error,-unexpected-'::'-(t_paamayim_nekudotayim),-expecting-';'-or-',' <calling-static-methods-on-strings>`
    * :ref:`A non-numeric value encountered <integer-non-silent-conversion>`
    * :ref:`Invalid characters passed for attempted conversion, these have been ignored <php-warns-when-finding-unconvertible-characters>`
    * :ref:`Cannot use isset() on the result of an expression (you can use "null !== expression" instead) <isset()-on-constants>`
    * :ref:`Uncaught TypeError: iterator_count(): Argument #1 ($iterator) must be of type Traversable, array given <iterator_count()-also-count-arrays>`
    * :ref:`Function libxml_disable_entity_loader() is deprecated since 8.0, as external entity loading is disabled by default <libxml_disable_entity_loader()-is-deprecated>`
    * :ref:`Duplicate value in enum A for cases A and B <duplicate-enum-cases-are-not-linted-anymore>`
    * :ref:`Declaration of SuperFoo::process(array $items): array should be compatible with Foo::process(stdClass $item): array <covariance-and-contravariance-are-fatal>`
    * :ref:`syntax error, unexpected token "match", expecting "(" <match-is-now-a-keyword>`
    * :ref:`Array must contain at least one element <no-min()-on-empty-array>`
    * :ref:`Must contain at least one element <min()-doesn't-accept-empty-arrays>`
    * :ref:`Handling Base64 via mbstring is deprecated; use base64_encode/base64_decode instead <mb_convert_encoding()-has-deprecated-formats>`
    * :ref:`Handling HTML entities via mbstring is deprecated; use htmlspecialchars, htmlentities, or mb_encode_numericentity/mb_decode_numericentity instead <mb_convert_encoding()-has-deprecated-formats>`
    * :ref:`Handling QPrint via mbstring is deprecated; use quoted_printable_encode/quoted_printable_decode instead <mb_convert_encoding()-has-deprecated-formats>`
    * :ref:`Handling Uuencode via mbstring is deprecated; use convert_uuencode/convert_uudecode instead <mb_convert_encoding()-has-deprecated-formats>`
    * :ref:`Cannot use 'mixed' as class name as it is reserved <mixed-is-now-a-keyword>`
    * :ref:`syntax error, unexpected ';', expecting '{' <no-new-line-in-namespaces>`
    * :ref:`Cannot combine named arguments and argument unpacking <named-parameters-and-variadic>`
    * :ref:`A never-returning function must not return <never-arrow-function>`
    * :ref:`syntax error, unexpected token "(" <direct-calls-on-new>`
    * :ref:`syntax error, unexpected token -> <call-method-on-new>`
    * :ref:`serialize(): __sleep should return an array only containing the names of instance-variables to serialize <__sleep()-method-enforces-return-type>`
    * :ref:`Non-canonical cast (binary) is deprecated, use the (string) cast instead <non-canonical-cast>`
    * :ref:`Non-canonical cast (binary) is deprecated, use the (bool) cast instead <non-canonical-cast>`
    * :ref:`Non-canonical cast (double) is deprecated, use the (float) cast instead <non-canonical-cast>`
    * :ref:`Non-canonical cast (integer) is deprecated, use the (int) cast instead <non-canonical-cast>`
    * :ref:`Non-static method Foo::bar() cannot be called statically <non-static-method-called-statically>`
    * :ref:`Call to undefined method Closure::getCurrent() <not-in-a-closure>`
    * :ref:`Current function is not a closure <not-in-a-closure>`
    * :ref:`Using null as an array offset is deprecated, use an empty string instead <null-as-array-offset>`
    * :ref:`Using null as the key parameter for array_key_exists() is deprecated, use an empty string instead <null-with-array_key_exists()>`
    * :ref:`Methods with the same name as their class will not be constructors in a future version of PHP <old-constructors>`
    * :ref:`Deprecated: Methods with the same name as their class will not be constructors in a future version of PHP; x has a deprecated constructor <old-style-constructor>`
    * :ref:`Only the first byte will be assigned to the string offset <only-first-byte>`
    * :ref:`Required parameter $%s follows optional parameter $%s <optional-parameter-are-after-compulsory-parameters>`
    * :ref:`Cannot use "parent" when current class scope has no parent <orphaned-parent>`
    * :ref:`Use of "parent" in callables is deprecated <parent-cannot-be-used-anymore-in-callable-arrays>`
    * :ref:`Calling %s() on an object is deprecated <passing-objects-is-deprecated>`
    * :ref:`Unknown format specifier "Z" <printf()-warns-about-unknown-formats>`
    * :ref:`range(): Argument #2 ($end) must be a single byte string if argument #1 ($start) is a single byte string, argument #1 ($start) converted to 0 <range()-uses-single-byte-strings>`
    * :ref:`range(): Argument #1 ($start) must be a single byte string if argument #2 ($end) is a single byte string, argument #2 ($end) converted to 0  <range()-with-int-and-string>`
    * :ref:`The (real) cast is deprecated, use (float) instead <(real)-is-replaced-by-(float)>`
    * :ref:`Nesting level too deep - recursive dependency?  <recursive-comparison-of-arrays>`
    * :ref:`syntax error, unexpected token "private", expecting "=" <relaxed-naming-with-class-constant>`
    * :ref:`Returning by reference from a void function is deprecated <return-reference-on-void>`
    * :ref:`Return type of x::current() should either be compatible with Iterator::current(): mixed <php-native-return-types-are-now-enforced>`
    * :ref:`must be a valid rounding mode (RoundingMode::*) <round()-mode-validation>`
    * :ref:`Use of "self" in callables is deprecated <static-cannot-be-used-anymore-in-callable-arrays>`
    * :ref:`Method x::__set_state() must be static <__set_state()-method-must-be-static>`
    * :ref:`foo::bar(): Argument #1 ($e) must be of type Exception, DivisionByZeroError given <set_exception_handler()-must-update-its-type-to-throwable>`
    * :ref:`usort(): Returning bool from comparison function is deprecated, return an integer less than, equal to, or greater than zero <sorting-closure-must-return-integers>`
    * :ref:`syntax error, unexpected fully qualified name "\Package", expecting "{" <spaces-in-namespaces>`
    * :ref:`Cannot bind an instance to a static closure <cannot-bind-$this-to-static-closure>`
    * :ref:`Use of "static" in callables is deprecated <static-cannot-be-used-anymore-in-callable-arrays>`
    * :ref:`strpos(): Non-string needles will be interpreted as strings in the future. Use an explicit chr() call to preserve the current behavior <str_pos()-requires-only-strings>`
    * :ref:`str_replace(): Argument #2 ($replace) must be of type string when argument #1 <str_replace()-checks-for-arguments>`
    * :ref:`Object of class stdClass could not be converted to string <str_replace()-on-arrays-of-objects>`
    * :ref:`Array to string conversion <str_replace()-enforces-strings-in-array-argument>`
    * :ref:`Function %s() is deprecated%S <strftime()-and-gmstrftime()-are-deprecated>`
    * :ref:`Increment on non-alphanumeric string is deprecated <string-increments>`
    * :ref:`%s(): Argument #%d ($%s) must be contained in argument #%d ($%s) <strpos()-with-out-of-range-offset-is-a-fatal-error>`
    * :ref:`Offset not contained in string. <strpos()-with-out-of-range-offset-is-a-fatal-error>`
    * :ref:`Argument #3 ($offset) must be of type int, string given <strpos()-emits-typeerror>`
    * :ref:`Offset not contained in string <strpos()-emits-valueerror>`
    * :ref:`Non-string needles will be interpreted as strings in the future. Use an explicit chr() call to preserve the current behavior  <strpos()-does-not-accept-false>`
    * :ref:`Passing null to parameter #2 ($needle) of type string is deprecated <strpos()-does-not-accept-null-as-second-parameter>`
    * :ref:`Passing null to parameter #1 ($haystack) of type string is deprecated <strpos()-with-null-haystack>`
    * :ref:`Argument #2 ($length) must be greater than 0 <str_split()-throws-valueerror-with-negative-lengths>`
    * :ref:`Unparenthesized `a ? b : c ? d : e` is not supported. <ternary-associativity>`
    * :ref:`Using $this when not in object context <$this-must-be-the-local-object>`
    * :ref:`syntax error, unexepected 'throw' (T_THROW) <throw-is-an-expression>`
    * :ref:`Method %s::%s() must not throw an exception, caught %s <__tostring-can-throw-exceptions>`
    * :ref:`syntax error, unexpected ')', expecting variable (T_VARIABLE) <trailing-comma-in-calls>`
    * :ref:`syntax error, unexpected identifier "%s", expecting variable <typed-class-constant>`
    * :ref:`Object of class %s could not be converted to string <removing-$this-from-a-closure-is-deprecated>`
    * :ref:`Uncaught Error: Undefined constant "%s" <undefined-constants>`
    * :ref:`Cannot unpack array with string keys <unpack-array-with-string-keys>`
    * :ref:`unserialize(): Extra data starting at offset 37 of 39 bytes <unserialize()-checks-the-end-of-the-string>`
    * :ref:`Maximum depth of %d exceeded. The depth limit can be changed using the max_depth unserialize() option <unserialize()-``max_depth``-option>`
    * :ref:`Error at offset 0 of 17 bytes <unserialize()-error-report>`
    * :ref:`Unserializing the 'S' format is deprecated <unserialize-with-the-upper-case-s-is-deprecated>`
    * :ref:`The (unset) cast is deprecated <(unset)-was-removed>`
    * :ref:`version_compare(): Argument #3 ($operator) must be a valid comparison operator <version_compare()-stricter-operators>`
    * :ref:`Too few arguments <vsprint()-requires-an-array>`
    * :ref:`Argument #%d ($%s) must be of type %s, %s given <vsprint()-requires-an-array>`
    * :ref:`The arguments array must contain %d items, %d given <vsprintf()-returns-empty-string-on-error>`
    * :ref:`Call to undefined function each() <each()-is-no-more>`
    * :ref:`Undefined constant "%s" <comment-inside-yield-from>`
    * :ref:`Keys must be of type int|string during array unpacking <yield-must-use-integer-or-string-keys>`
    * :ref:`Power of base 0 and negative exponent is deprecated <cannot-raise-zero-to-negative-powers>`
