# Constants With Objects

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/constWithObjects.html","headline":"Constants With Objects","name":"Constants With Objects","description":"Global constants are allowed to use an object, starting with PHP 8.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/constWithObjects.html","inLanguage":"en","dateModified":"2026-01-04T21:00:04+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Constants With Objects"}]}}</script>

Global constants are allowed to use an object, starting with PHP 8.1. The object must be instantiated with only constants values, like literals and other constants.



Class constant are not allowed to use the `new` keyword.

## PHP code

```php
<?php

const A = new stdclass();

var_dump(A);

?>
```

## Before

```text
PHP Fatal error:  Constant expression contains invalid operations

Fatal error: Constant expression contains invalid operations
```

## After

```text
object(stdClass)#1 (0) {
}
```

## PHP version change

This behavior changed in 8.1.

## Error Messages

- [Constant expression contains invalid operations](https://php-errors.readthedocs.io/en/latest/messages/constant-expression-contains-invalid-operations.html)

## Analyzer

- [Php/NewInitializers](https://exakat.readthedocs.io/en/latest/Reference/Rules/Php/NewInitializers.html)
