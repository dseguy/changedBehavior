# PHP native return types are now enforced

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/returnTypeEnforce.html","headline":"PHP native return types are now enforced","name":"PHP native return types are now enforced","description":"PHP provides native interfaces: they include methods and their type.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/returnTypeEnforce.html","inLanguage":"en","dateModified":"2026-02-10T08:43:38+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"PHP native return types are now enforced"}]}}</script>

PHP provides native interfaces: they include methods and their type. Until PHP 8.1, such types were not enforced, for backward compatibility reasons. Nowadays, these types are enforced, just like any other interface. It makes PHP native interfaces on the same footing as custom interfaces.



In case this migration is too ambitious, it is possible to use the `#[\ReturnTypeWillChange]` to suppress the warning.



## PHP code

```php
<?php

class x implements Iterator {

function __construct() {
	print __METHOD__;
}

public function current()  {}
public function key(): mixed {}
public function next(): void {}
public function rewind(): void {}
public function valid(): bool {}
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

This behavior changed in 8.1.

## Error Messages

- [Return type of x::current() should either be compatible with Iterator::current(): mixed](https://php-errors.readthedocs.io/en/latest/messages/return-type-of-%25s%3A%3A%25s%28%29-should-either-be-compatible-with-%25s%3A%3A%25s%28%29%3A-mixed.html)
