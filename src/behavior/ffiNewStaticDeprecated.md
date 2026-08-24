# Calling FFI::new() statically is deprecated

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/ffiNewStaticDeprecated.html","headline":"Calling FFI::new() statically is deprecated","name":"Calling FFI::new() statically is deprecated","description":"`new()`, `cast()` and `type()` are instance methods of the object returned by `FFI::cdef()` or `FFI::load()`: each loaded C definition scope has its own set of types, so allocating a new value should happen on that specific instance.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/ffiNewStaticDeprecated.html","inLanguage":"en","dateModified":"2026-08-22T08:06:31+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Calling FFI::new() statically is deprecated"}]}}</script>

`new()`, `cast()` and `type()` are instance methods of the object returned by `FFI::cdef()` or `FFI::load()`: each loaded C definition scope has its own set of types, so allocating a new value should happen on that specific instance. PHP used to allow calling these methods statically as `FFI::new()`, in which case they implicitly operated on an anonymous, definition-less scope. Since PHP 8.3, this static shortcut is deprecated, because it is ambiguous about which set of C declarations is being used.

## PHP code

```php
<?php

FFI::cdef('typedef struct { int x; int y; } point;');

$mem = FFI::new('point');

var_dump($mem);

?>
```

## Before

```text
object(FFI\CData:struct <anonymous>)#2 (2) {
  ["x"]=>
  int(0)
  ["y"]=>
  int(0)
}
```

## After

```text
PHP Deprecated:  Calling FFI::new() statically is deprecated in /codes/ffiNewStaticDeprecated.php on line 5

Deprecated: Calling FFI::new() statically is deprecated in /codes/ffiNewStaticDeprecated.php on line 5
object(FFI\CData:struct <anonymous>)#2 (2) {
  ["x"]=>
  int(0)
  ["y"]=>
  int(0)
}
```

## PHP version change

This behavior changed in 8.3.

## Error Messages

- [0](https://php-errors.readthedocs.io/en/latest/messages/calling-ffi%3A%3Anew%28%29-statically-is-deprecated.html)
