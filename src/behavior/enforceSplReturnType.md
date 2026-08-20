# Enforcing Return Type With Spl Classes

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/enforceSplReturnType.html","headline":"Enforcing Return Type With Spl Classes","name":"Enforcing Return Type With Spl Classes","description":"Until PHP 8.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/enforceSplReturnType.html","inLanguage":"en","dateModified":"2026-08-12T15:27:48+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Enforcing Return Type With Spl Classes"}]}}</script>

Until PHP 8.1, the types of the methods that were related to SPL were not validated against their interfaced, as it is the case for other native or custom interfaces. 



In PHP 8.1, it is now enforced.

## PHP code

```php
<?php

class X extends LimitIterator {
	function __construct() { echo __METHOD__; }
	public function current() {}
}

new X();

?>
```

## Before

```text
x::__construct
```

## After

```text
PHP Deprecated:  Return type of x::current() should either be compatible with IteratorIterator::current(): mixed, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice

Deprecated: Return type of x::current() should either be compatible with IteratorIterator::current(): mixed, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice
x::__construct
```

## PHP version change

This behavior changed in 8.1.

## Error Messages

- [Return type of %s::%s() should either be compatible with %s::%s(): mixed](https://php-errors.readthedocs.io/en/latest/messages/return-type-of-%25s%3A%3A%25s%28%29-should-either-be-compatible-with-%25s%3A%3A%25s%28%29%3A-mixed.html)
