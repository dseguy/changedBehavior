# Interface Constant Visibility Checks

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/interfaceConstantVisibilityCheck.html","headline":"Interface Constant Visibility Checks","name":"Interface Constant Visibility Checks","description":"PHP checks if the visibility of constants that are also part of an interface are all public.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/interfaceConstantVisibilityCheck.html","inLanguage":"en","dateModified":"2026-08-12T15:30:23+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Interface Constant Visibility Checks"}]}}</script>

PHP checks if the visibility of constants that are also part of an interface are all public. If the class constant, in the class, is not public, it is a Fatal Error. This was not checked until PHP 8.3.

## PHP code

```php
<?php

interface i {
        public const I = 1;
        public const J = 2;
}

class x implements i {
        private const I = 1;
        public const J = 2;
}

print x::J;
print x::I;
?>
```

## Before

```text
Cannot access private constant x::I
```

## After

```text
Access level to x::I must be public (as in interface i)
```

## PHP version change

This behavior changed in 8.3.

## Error Messages

- [Cannot access %s constant %s::%s](https://php-errors.readthedocs.io/en/latest/messages/cannot-access-%25s-const-%25s%3A%3A%25s.html)
- [Access level to %s::%s must be %s (as in %s)](https://php-errors.readthedocs.io/en/latest/messages/access-level-to-%25s%3A%3A%25s-must-be-%25s-%28as-in-%25s-%25s%29%25s.html)
