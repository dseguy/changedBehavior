# version_compare() Stricter Operators

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/version_compare.html","headline":"version_compare() Stricter Operators","name":"version_compare() Stricter Operators","description":"version_compare() compares version strings, using an operator, passed as third parameter.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/version_compare.html","inLanguage":"en","dateModified":"2026-01-20T16:06:16+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"version_compare() Stricter Operators"}]}}</script>

version_compare() compares version strings, using an operator, passed as third parameter. Until PHP 8.3, unknown operators are ignored, and the function uses the default value. 



Valid values of comparisons are : `<`, `lt`, `<=`, `le`, `>`, `gt`, `>=`, `ge`, `==`, `=`, `eq`, `!=`, `<>`, `ne`.



Nowadays, it is generating a fatal error.

## PHP code

```php
<?php

print version_compare('1.0', '2.3', '!');

?>
```

## Before

```text
1
```

## After

```text
PHP Fatal error:  Uncaught ValueError: version_compare(): Argument #3 ($operator) must be a valid comparison operator
```

## PHP version change

This behavior changed in 8.1.

## Error Messages

- [version_compare(): Argument #3 ($operator) must be a valid comparison operator](https://php-errors.readthedocs.io/en/latest/messages/must-be-a-valid-comparison-operator.html)

## Analyzer

- [Php/VersionCompareOperator](https://exakat.readthedocs.io/en/latest/Reference/Rules/Php/VersionCompareOperator.html)
