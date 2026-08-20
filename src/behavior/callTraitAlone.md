# Cannot Call Traits Methods Directly

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/callTraitAlone.html","headline":"Cannot Call Traits Methods Directly","name":"Cannot Call Traits Methods Directly","description":"Traits used to be called directly, like a class.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/callTraitAlone.html","inLanguage":"en","dateModified":"2026-01-20T06:23:46+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Cannot Call Traits Methods Directly"}]}}</script>

Traits used to be called directly, like a class. In PHP 8.1, this feature has been removed. The methods, properties or constants of the trait must be called in the context of their host class.

## PHP code

```php
<?php

trait T {
    static function foo() { echo __METHOD__; }
}

echo T::foo();

?>
```

## Before

```text
t::foo
```

## After

```text
PHP Deprecated:  Calling static trait method t::foo is deprecated, it should only be called on a class using the trait

Deprecated: Calling static trait method t::foo is deprecated, it should only be called on a class using the trait
t::foo
```

## PHP version change

This behavior was deprecated in 8.1.

This behavior changed in 9.0.

## Error Messages

- [Calling static trait method t::foo is deprecated, it should only be called on a class using the trait](https://php-errors.readthedocs.io/en/latest/messages/calling-static-trait-method-%25s%3A%3A%25s-is-deprecated.html)

## Analyzer

- [Traits/CannotCallTraitMethod](https://exakat.readthedocs.io/en/latest/Reference/Rules/Traits/CannotCallTraitMethod.html)
