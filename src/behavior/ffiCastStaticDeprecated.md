# Calling FFI::cast() statically is deprecated

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/ffiCastStaticDeprecated.html","headline":"Calling FFI::cast() statically is deprecated","name":"Calling FFI::cast() statically is deprecated","description":"`cast()`, `new()` and `type()` are instance methods of the object returned by `FFI::cdef()` or `FFI::load()`: each loaded C definition scope has its own set of types, so casting should happen on that specific instance.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/ffiCastStaticDeprecated.html","inLanguage":"en","dateModified":"2026-08-22T08:06:26+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Calling FFI::cast() statically is deprecated"}]}}</script>

`cast()`, `new()` and `type()` are instance methods of the object returned by `FFI::cdef()` or `FFI::load()`: each loaded C definition scope has its own set of types, so casting should happen on that specific instance. PHP used to allow calling these methods statically as `FFI::cast()`, in which case they implicitly operated on an anonymous, definition-less scope. Since PHP 8.3, this static shortcut is deprecated, because it is ambiguous about which set of C declarations is being used.

## PHP code

```php
<?php

$ffi = FFI::cdef('typedef struct { int x; int y; } point;');

$mem = $ffi->new('point');

$casted = FFI::cast('int', $mem);

var_dump($casted);

?>
```

## Before

```text
object(FFI\CData:int32)#3 (1) {
  [0]=>
  int(0)
}
```

## After

```text
PHP Deprecated:  Calling FFI::cast() statically is deprecated in /codes/ffiCastStaticDeprecated.php on line 7

Deprecated: Calling FFI::cast() statically is deprecated in /codes/ffiCastStaticDeprecated.php on line 7
object(FFI\CData:int32)#3 (1) {
  [0]=>
  int(0)
}
```

## PHP version change

This behavior changed in 8.3.

## Error Messages

- [0](https://php-errors.readthedocs.io/en/latest/messages/calling-ffi%3A%3Acast%28%29-statically-is-deprecated.html)
