# Override Attribute Extended To Class Constants And Enum Cases

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/overrideAttributeOnConstant86.html","headline":"Override Attribute Extended To Class Constants And Enum Cases","name":"Override Attribute Extended To Class Constants And Enum Cases","description":"The `#[\\Override]` attribute, introduced in PHP 8.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/overrideAttributeOnConstant86.html","inLanguage":"en","dateModified":"2026-08-12T15:31:13+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Override Attribute Extended To Class Constants And Enum Cases"}]}}</script>

The `#[\Override]` attribute, introduced in PHP 8.3 for methods and extended to properties in PHP 8.5, is further extended in PHP 8.6 to class constants and enum cases (an enum case being internally a special kind of class constant). It tells the engine that the constant is expected to override a constant of the same name declared in a parent class or an implemented interface, so the engine can check that this is really the case.



If the constant marked `#[\Override]` has no matching parent constant -- because the parent/interface declares no constant of that name, or because the class has no parent and implements no interface at all -- PHP reports a compile-time error. Only public and protected constants of a parent class or implemented interface satisfy the attribute; private constants do not count.

## PHP code

```php
<?php

interface Shape {
    const SIDES = 0;
}

class Square implements Shape {
    #[\Override]
    const SIDES = 4; // Fine, overrides Shape::SIDES

    #[\Override]
    const COLOR = 'blue'; // Fatal error, no matching parent constant
}

?>
```

## Before

```text
PHP Fatal error:  Attribute "Override" cannot target class constant (allowed targets: method)

Fatal error: Attribute "Override" cannot target class constant (allowed targets: method)
```

## After

```text
PHP Fatal error:  Square::COLOR has #[\Override] attribute, but no matching parent constant exists
```

## PHP version change

This behavior changed in 8.6.

## Error Messages

- [%s::%s has #[\Override] attribute](https://php-errors.readthedocs.io/en/latest/messages/%25s%3A%3A%25s-has-%23%5B--override%5D-attribute.html)
