# Nested Attributes

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/nestedAttributes.html","headline":"Nested Attributes","name":"Nested Attributes","description":"Attributes can handle nested `new` calls since PHP 8.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/nestedAttributes.html","inLanguage":"en","dateModified":"2026-08-12T15:30:23+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Nested Attributes"}]}}</script>

Attributes can handle nested `new` calls since PHP 8.1. They can use literals, constants and now, full objects as part of the attribute expression. 

## PHP code

```php
<?php

#[JoinTable(joinColumns: [new JoinColumn])]
class x {
	function __construct() {
		print __METHOD__;
	}
}

new x;

?>
```

## Before

```text
PHP Fatal error:  Constant expression contains invalid operations

Fatal error: Constant expression contains invalid operations
```

## After

```text
x::__construct
```

## PHP version change

This behavior changed in 8.1.

## Error Messages

- [Constant expression contains invalid operations](https://php-errors.readthedocs.io/en/latest/messages/constant-expression-contains-invalid-operations.html)
