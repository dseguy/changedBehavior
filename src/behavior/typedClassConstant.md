# Typed Class Constant

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/typedClassConstant.html","headline":"Typed Class Constant","name":"Typed Class Constant","description":"Support for typed class constants was added in PHP 8.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/typedClassConstant.html","inLanguage":"en","dateModified":"2025-11-07T21:34:01+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Typed Class Constant"}]}}</script>

Support for typed class constants was added in PHP 8.3

## PHP code

```php
<?php

class x {
    public int A = 1;
}

echo X::A;

?>
```

## Before

```text
Parse error: syntax error, unexpected identifier "A", expecting variable
```

## After

```text
1
```

## PHP version change

This behavior changed in 8.3.

## See Also

- [Class Constants](https://www.php.net/manual/en/language.oop5.constants.php)

## Error Messages

- [syntax error, unexpected identifier "%s", expecting variable](https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-identifier-%22%25s%22%2C-expecting-variable.html)

## Analyzer

- [Classes/TypedClassConstants](https://exakat.readthedocs.io/en/latest/Reference/Rules/Classes/TypedClassConstants.html)
