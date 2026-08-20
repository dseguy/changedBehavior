# Override Attribute Extended To Properties

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/overrideAttributeOnProperty85.html","headline":"Override Attribute Extended To Properties","name":"Override Attribute Extended To Properties","description":"The `#[\\Override]` attribute, introduced in PHP 8.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/overrideAttributeOnProperty85.html","inLanguage":"en","dateModified":"2026-08-12T15:31:22+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Override Attribute Extended To Properties"}]}}</script>

The `#[\Override]` attribute, introduced in PHP 8.3, could originally only target methods. PHP 8.5 extends it so it can also be applied to properties, telling the engine that the property is expected to override a property of the same name declared in a parent class or an implemented interface, so the engine can check that this is really the case.



If the property marked `#[\Override]` has no matching parent property -- because the parent has no property of that name, because the class has no parent at all, or because the property comes from a trait whose using class has no matching parent property -- PHP reports a compile-time error.

## PHP code

```php
<?php

class X {
    public int $a = 1;
}

class Y extends X {
    #[\Override]
    public int $b = 2;
}

?>
```

## Before

```text
PHP Fatal error:  Attribute "Override" cannot target property (allowed targets: method)
```

## After

```text
PHP Fatal error:  Y::$b has #[\Override] attribute, but no matching parent property exists
```

## PHP version change

This behavior changed in 8.5.

## Error Messages

- [%s::$%s has #[\Override] attribute](https://php-errors.readthedocs.io/en/latest/messages/%25s%3A%3A%24%25s-has-%23%5B--override%5D-attribute.html)
