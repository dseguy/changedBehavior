# Constants In Trait

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/ConstantInTrait.html","headline":"Constants In Trait","name":"Constants In Trait","description":"Trait can have constants.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/ConstantInTrait.html","inLanguage":"en","dateModified":"2026-08-20T19:18:53+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Constants In Trait"}]}}</script>

Trait can have constants. Until PHP 8.3, constants cannot be set in traits, and end with a compilation error.

## PHP code

```php
<?php

trait T {
    const X = 1;
}

class X {
	use T;
}

echo X::X;

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

This behavior changed in 8.3.

## Error Messages

- [Traits cannot have constants](https://php-errors.readthedocs.io/en/latest/messages/traits-cannot-have-constants.html)

## Analyzer

- [Traits/ConstantsInTraits](https://exakat.readthedocs.io/en/latest/Reference/Rules/Traits/ConstantsInTraits.html)
