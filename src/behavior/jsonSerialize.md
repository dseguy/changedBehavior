# jsonSerialize Must Have Return Type

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/jsonSerialize.html","headline":"jsonSerialize Must Have Return Type","name":"jsonSerialize Must Have Return Type","description":"Until PHP 8.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/jsonSerialize.html","inLanguage":"en","dateModified":"2026-08-12T07:13:58+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"jsonSerialize Must Have Return Type"}]}}</script>

Until PHP 8.1, PHP would not enforce the type compatibility between a native interface and its custom implementation. This was for backward compatibility, and it is now over: PHP checks for type compatibility.



If making the returntype mixed or compatible is not possible at the moment, it is possible to use the `ReturnTypeWillChange` attribute to avoid this error message until it is actually fixed.



This affects all PHP native interfaces, and `jsonSerialize` is the most frequent to be reported.



## PHP code

```php
<?php

class x implements JsonSerializable {
	function __construct() { echo __METHOD__; }
	function jsonSerialize() {}
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
PHP Deprecated:  Return type of x::jsonSerialize() should either be compatible with JsonSerializable::jsonSerialize(): mixed, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice 

Deprecated: Return type of x::jsonSerialize() should either be compatible with JsonSerializable::jsonSerialize(): mixed, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice 
x::__construct
```

## PHP version change

This behavior changed in 8.1.

## Error Messages

- [Return type of x::jsonSerialize() should either be compatible with JsonSerializable::jsonSerialize(): mixed, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice](https://php-errors.readthedocs.io/en/latest/messages/return-type-of-%25s%3A%3A%25s%28%29-should-either-be-compatible-with-%25s%3A%3A%25s%28%29%3A-mixed.html)

## Analyzer

- [Php/NativeClassTypeCompatibility](https://exakat.readthedocs.io/en/latest/Reference/Rules/Php/NativeClassTypeCompatibility.html)
