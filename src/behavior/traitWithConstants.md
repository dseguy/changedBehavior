# Constants In Traits

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/traitWithConstants.html","headline":"Constants In Traits","name":"Constants In Traits","description":"Constants are allowed in traits in PHP 8.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/traitWithConstants.html","inLanguage":"en","dateModified":"2025-09-02T20:54:17+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Constants In Traits"}]}}</script>

Constants are allowed in traits in PHP 8.3 and more recent. Until then, they were not supported.

## PHP code

```php
<?php

trait T {
    const A = 1;
}

class X {
    use T;
}

echo X::A;
?>
```

## Before

```text
PHP Fatal error:  Traits cannot have constants
```

## After

```text
1
```

## PHP version change

This behavior changed in 8.2.

## Error Messages

- [Traits cannot have constants](https://php-errors.readthedocs.io/en/latest/messages/traits-cannot-have-constants.html)

## Analyzer

- [Traits/ConstantsInTraits](https://exakat.readthedocs.io/en/latest/Reference/Rules/Traits/ConstantsInTraits.html)
