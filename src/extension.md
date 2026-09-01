# PHP Extensions

<script type="application/ld+json">{"@context":"https://schema.org","@type":"CollectionPage","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/extensions.html","name":"PHP extensions","description":"PHP extensions, linked to the behavior change that they produce.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/extensions.html","inLanguage":"en","isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"}}</script>

+ SPL<a id="SPL" />
   + [Several ArrayIterator Methods Are Deprecated](behavior/arrayIteratorMethodsDeprecated.md)
   + [Enforcing Return Type With Spl Classes](behavior/enforceSplReturnType.md)
   + [FilessytemIterator Skips Dot Files](behavior/filessytemiteratorSkipDot.md)
   + [iterator_count() Also Count Arrays](behavior/iteratorsArray.md)
   + [SplFileObject::fgets() No Longer Caches The Current Line](behavior/splFileObjectFgetsCaching.md)
   + [SplFileObject::next() Always Advances The Stream](behavior/splFileObjectNextCaching86.md)
   + [SplFixedArray Is Now An IteratorAggregate](behavior/splfixedarray.md)
   + [spl_object_hash() Is Deprecated](behavior/splObjectHashDeprecated.md)
   + [SplObjectStorage::getHash() May No Longer Mutate Storage](behavior/splObjectStorageGetHashMutation86.md)
+ curl<a id="curl" />
   + [curl_close() No Longer Flushes The Cookie Jar](behavior/curl_close_cookie_flush.md)
   + [cUrl Moved Away From Resource](behavior/curl_init.md)
   + [CURLOPT_READFUNCTION Callback Validates Its Return Value](behavior/curlReadFunctionValueError.md)
+ date<a id="date" />
   + [datetime With Multiple Signs](behavior/datetimeWithMultipleSigns.md)
   + [strftime() And gmstrftime() Are Deprecated](behavior/strftime.md)
   + [Tentative Static Returntype With Datetime](behavior/tentativeStaticWithDatetime.md)
+ dom<a id="dom" />
   + [DOM Readonly Properties Use Asymmetric Visibility](behavior/domAsymmetricVisibility.md)
+ Reflection<a id="Reflection" />
   + [Method export() in Reflection Is removed](behavior/exportReflection.md)
   + [Reflection Doesn't Return Self](behavior/reflection_self.md)
   + [Reflection Doesn't Return Static](behavior/reflection_static.md)
   + [ReflectionMethod::invoke() Deprecates Passing An Object For A Static Method](behavior/reflectionInvokeStaticObject.md)
   + [ReflectionProperty::setValue() Deprecates A Wrong Object Type](behavior/reflectionSetValueWrongObject.md)
+ FFI<a id="FFI" />
   + [Calling FFI::cast() statically is deprecated](behavior/ffiCastStaticDeprecated.md)
   + [Calling FFI::new() statically is deprecated](behavior/ffiNewStaticDeprecated.md)
   + [Calling FFI::type() statically is deprecated](behavior/ffiTypeStaticDeprecated.md)
+ fileinfo<a id="fileinfo" />
   + [Finfo Moved Away From Resource](behavior/finfo_open.md)
+ gmp<a id="gmp" />
   + [GMP Shift And Power Operators Deprecate Float Operands](behavior/gmpFloatOperandDeprecated.md)
   + [Several GMP Functions Validate Their Numeric Arguments](behavior/gmpFunctionsValueError.md)
   + [gmp_powm() Reports More Detail On Modulo-By-Zero](behavior/gmpPowmDivisionByZero.md)
   + [GMP Shift Operators Validate A GMP Right Operand](behavior/gmpShiftValueError86.md)
+ libxml<a id="libxml" />
   + [libxml_disable_entity_loader() Is Deprecated](behavior/libxml_disable_entity_loader.md)
+ mbstring<a id="mbstring" />
   + [mb_convert_encoding() Has Deprecated Formats](behavior/mb_convert_encoding.md)
   + [Integer Regex With mb_ereg_replace()](behavior/mb_ereg_replaceWithInteger.md)
   + [mb_strrpos() Third Argument Is Not Encoding](behavior/mb_strrpos.md)
   + [Passing An Object To mb_convert_variables() Is Deprecated](behavior/mbConvertVariablesObjectDeprecated.md)
   + [The mbstring Regex (mbregex) Functions Are Deprecated](behavior/mbregexDeprecated.md)
   + [substr() Returns Empty String On Out Of Bond Offset](behavior/substrReturnsEmptyStringOnOutOfBondOffset.md)
+ pcre<a id="pcre" />
   + [preg_grep() Returns false On A PCRE Execution Error](behavior/pregGrepPcreError86.md)
+ sodium<a id="sodium" />
   + [sodium_crypto_pwhash_str() Throws ValueError For Out-Of-Range Limits](behavior/sodiumPwhashValueError86.md)
+ iconv<a id="iconv" />
   + [substr() Returns Empty String On Out Of Bond Offset](behavior/substrReturnsEmptyStringOnOutOfBondOffset.md)
+ intl<a id="intl" />
   + [substr() Returns Empty String On Out Of Bond Offset](behavior/substrReturnsEmptyStringOnOutOfBondOffset.md)
