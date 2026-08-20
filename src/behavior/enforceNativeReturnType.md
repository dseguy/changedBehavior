# Enforcing Native PHP ReturnType

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/enforceNativeReturnType.html","headline":"Enforcing Native PHP ReturnType","name":"Enforcing Native PHP ReturnType","description":"PHP did not enforce the return types in its own interfaces.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/enforceNativeReturnType.html","inLanguage":"en","dateModified":"2026-08-20T16:03:04+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Enforcing Native PHP ReturnType"}]}}</script>

PHP did not enforce the return types in its own interfaces. Until PHP 8.1, incompatible signatures were allowed between them. 



In PHP 8.1, such return type is now enforced. It should be set manually, or be temporarily suspended with the #[\ReturnTypeWillChange] attribute.

## PHP code

```php
<?php

class x implements iterator {
	function __construct() { echo __METHOD__; }
	public current() {}
}

new x;

?>
```

## Before

```text
x::__construct
```

## After

```text
PHP Deprecated:  Return type of x::current() should either be compatible with Iterator::current(): mixed, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice

Deprecated: Return type of x::current() should either be compatible with Iterator::current(): mixed, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice
x::__construct
```

## PHP version change

This behavior was deprecated in 8.1.

This behavior changed in 9.0.

## Error Messages

- [Return type of x::jsonSerialize() should either be compatible with JsonSerializable::jsonSerialize(): mixed, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice](https://php-errors.readthedocs.io/en/latest/messages/return-type-of-%25s%3A%3A%25s%28%29-should-either-be-compatible-with-%25s%3A%3A%25s%28%29%3A-mixed.html)

## Analyzer

- [Php/NativeClassTypeCompatibility](https://exakat.readthedocs.io/en/latest/Reference/Rules/Php/NativeClassTypeCompatibility.html)
