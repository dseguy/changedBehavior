# Calling Non-Static Method Statically

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/callingNonStaticMethodStatically.html","headline":"Calling Non-Static Method Statically","name":"Calling Non-Static Method Statically","description":"Calling non-static method statically has been deprecated for a long time.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/callingNonStaticMethodStatically.html","inLanguage":"en","dateModified":"2026-01-20T06:54:13+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Calling Non-Static Method Statically"}]}}</script>

Calling non-static method statically has been deprecated for a long time. 



It should be noted that, inside a class, it is possible to statically call any methods of the same class. This is needed for edge cases such as `parent::__construct()`, where the constructor is never static.



## PHP code

```php
<?php

class x {
	function foo() {
		print __METHOD__;
	}
}

x::foo();

?>
```

## Before

```text
PHP Deprecated:  Non-static method x::foo() should not be called statically

Deprecated: Non-static method x::foo() should not be called statically
x::foo
```

## After

```text
PHP Fatal error:  Uncaught Error: Non-static method x::foo() cannot be called statically

Fatal error: Uncaught Error: Non-static method x::foo() cannot be called statically
```

## PHP version change

This behavior changed in 8.0.

## Error Messages

- [Non-static method %s::%s() should not be called statically](https://php-errors.readthedocs.io/en/latest/messages/non-static-method-%25s%3A%3A%25s%28%29-should-not-be-called-statically.html)

## Analyzer

- [Classes/StaticMethodsCalledFromObject](https://exakat.readthedocs.io/en/latest/Reference/Rules/Classes/StaticMethodsCalledFromObject.html)
