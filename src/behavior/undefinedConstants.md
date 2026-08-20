# Undefined Constants

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/undefinedConstants.html","headline":"Undefined Constants","name":"Undefined Constants","description":"Undefined global constants used to fallback to their equivalent string.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/undefinedConstants.html","inLanguage":"en","dateModified":"2025-09-02T20:51:43+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Undefined Constants"}]}}</script>

Undefined global constants used to fallback to their equivalent string. It would keep the execution going, too. In PHP 8.0, such mistake is a Fatal Error

## PHP code

```php
<?php

echo D;

?>
```

## Before

```text
D
```

## After

```text
Uncaught Error: Undefined constant "D"
```

## PHP version change

This behavior was deprecated in 7.0.

This behavior changed in 8.0.

## Error Messages

- [Uncaught Error: Undefined constant "%s"](https://php-errors.readthedocs.io/en/latest/messages/undefined-constant-%22%25s.html)

## Analyzer

- [Constants/UndefinedConstants](https://exakat.readthedocs.io/en/latest/Reference/Rules/Constants/UndefinedConstants.html)
